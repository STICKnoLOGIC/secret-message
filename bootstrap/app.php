<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions){
        $exceptions->render(function (Throwable $e) {
            if ($e instanceof HttpExceptionInterface) {
                $status = $e->getStatusCode();
            } else {
                $status = $e->getCode();
            }

            if ($e instanceof Symfony\Component\HttpKernel\Exception\HttpException
            && $status === 503) {
                return response()->view('error.maintenance', [], 503);
            }

            // if ($status < 100 || $status >= 600) {
            //     $status = 500;
            // }

            $safeMessage = match($status) {
                404 => 'The Message you are looking for could not be found.',
                403 => 'You are not authorized to access this page.',
                419 => 'Your session has expired. Please refresh the page.',
                500 => 'Something went wrong. Please try again later.',
            };

            return response()->view('error.any', [
                'code' => $status,
                'title' => 'Something went wrong',
                'message' => $safeMessage ?? $e->getMessage(),
            ], $status);
        });
    })->create();
