<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $defaultLocale = config('app.locale');
        $supportedLocales = config('app.supported_locales', ['ar', 'en']);

        if ($request->hasHeader('Accept-Language')) {
            $this->detectLocaleFromHeader($request, $defaultLocale, $supportedLocales);
            return $next($request);
        }

        // From the authenticated user
        $user = $request->user();
        if ($user  && in_array($user->locale, $supportedLocales)) {
            $this->setLocale($user->locale, $defaultLocale, $supportedLocales);
            return $next($request);
        }

        if ($locale = $this->getLocaleFromUrl($request, $supportedLocales)) {
            $this->setLocale($locale, $defaultLocale, $supportedLocales);
            return $next($request);
        }

        if ($locale = $request->cookie('locale')) {
            $this->setLocale($locale, $defaultLocale, $supportedLocales);
            return $next($request);
        }

        app()->setLocale($defaultLocale);
        return $next($request);
    }

    /**
     * Detect locale from Accept-Language header
     */
    protected function detectLocaleFromHeader(Request $request, $defaultLocale, array $supportedLocales): void
    {
        $value = $request->header('Accept-Language');
        if (!empty($value) && strlen($value) === 2 && in_array($value, $supportedLocales)) {
            app()->setLocale($value);
            return;
        }

        app()->setLocale($defaultLocale);
    }

    /**
     * Extract the locale from the URL
     */
    protected function getLocaleFromUrl(Request $request, $supportedLocales): ?string
    {
        $segments = $request->segments();
        $locale = $segments[0] ?? null;

        if (in_array($locale, $supportedLocales)) {
            $request->route()->forgetParameter('locale');
            return $locale;
        }

        return null;
    }

    /**
     * Set the locale and log the user's choice
     */
    protected function setLocale(string $locale, $defaultLocale, $supportedLocales): void
    {
        if (in_array($locale, $supportedLocales)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale($defaultLocale);
        }
    }
}
