<?php

namespace App\Exceptions;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CustomValidationException extends ValidationException
{
    public function render($request)
    {
        if (requestIsJsonApiHelper()) {
            return response()->json([
                'status' => false,
                'code' => 'VALIDATION_FAILED',
                'message' => __('exceptions.validation_exception_422'),
                'errors' => $this->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return redirect()->back()
            ->withErrors($this->validator)
            ->withInput();

        return parent::render($request);
    }

    public function report()
    {
        $request = request();

        Log::warning('Validation failed', [
            'exception' => static::class,
            'userId' => getCurrUserIdHelper() ?? 'Guest',
            'endpoint' => $request->fullUrl(),
            'method' => $request->method(),
            'errors' => $this->errors(),
            'input' => filterSensitiveDataFromLogHelper($request ? $request->all() : [])
        ]);
    }
}
