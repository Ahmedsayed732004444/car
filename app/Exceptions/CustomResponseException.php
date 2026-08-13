<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CustomResponseException extends Exception
{
    /**
     * @param string $message The error message for the user
     * @param int $code HTTP status code (e.g., 404, 422, 500)
     * @param ?\Throwable $previous Previous exception for tracing
     */
    public function __construct(string $message = "", int $code = Response::HTTP_INTERNAL_SERVER_ERROR, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Log exception details.
     * Laravel will automatically pass the request.
     */
    public function report(): void
    {
        $exceptionToLog = $this->getPrevious() ?? $this;

        $request = request();

        Log::error($this->getMessage(), [
            'exception' => static::class,
            'excep_details' => $exceptionToLog->getMessage(),
            'userId' => getCurrUserIdHelper() ?? 'Guest',
            'code' => $this->getCode(),
            'file' => $this->getFile(),
            'line' => $this->getLine(),
            'url' => $request->fullUrl(),
            'request' => filterSensitiveDataFromLogHelper($request ? $request->all() : []),
        ]);
    }

    /**
     * Render the exception as an HTTP response.
     * Laravel will automatically pass the request.
     *
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function render(Request $request): JsonResponse|RedirectResponse
    {
        if (requestIsJsonApiHelper()) {
            $response = [
                'status' => false,
                'message' => $this->getMessage(),
                'errors' => null,
            ];

            $statusCode = $this->isValidHttpStatusCode($this->getCode()) ? $this->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR;

            return response()->json($response, $statusCode);
        }

        return back()->with('error', $this->getMessage())->withInput();
    }

    private function isValidHttpStatusCode(int $code): bool
    {
        return $code >= 100 && $code < 600;
    }
}
