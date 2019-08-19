<?php

namespace App\Exceptions;

use Exception;
use Request;
use Illuminate\Auth\AuthenticationException;
use Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {

        $guard = array_get($exception->guards(),0);
        switch ($guard) {
            case 'admin':
                return $request->expectsJson()
                            ? response()->json(['success' => false,'message' => $exception->getMessage()], 401)
                            : redirect()->guest(route('admin.login'));
                break;

            default:
                return $request->expectsJson()
                            ? response()->json(['success' => false, 'message' => $exception->getMessage()], 401)
                            : redirect()->guest(route('login'));
                break;
        }
    }

    /**
     * Convert a validation exception into a JSON response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Validation\ValidationException  $exception
     * @return \Illuminate\Http\JsonResponse
     */
    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'code'    => $exception->status,
            'message' => $exception->getMessage(),
            'errors'  => $this->transformErrors($exception),

        ], $exception->status);
    }

// transform the error messages,
    private function transformErrors(ValidationException $exception)
    {
        $errors = [];

        foreach ($exception->errors() as $field => $message) {
           $errors[] = [
               'field' => $field,
               'message' => $message[0],
           ];
        }

        return $errors;
    }
}
