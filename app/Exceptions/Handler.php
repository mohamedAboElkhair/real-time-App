<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

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
        if ($exception instanceof TokenBlacklistedException) {
            return response()->json(['error' => 'token Can not used Take Another'], Response::HTTP_BAD_REQUEST);
        } elseif ($exception instanceof TokenInvalidException) {
            return response()->json(['error' => 'token is not Invalid'], Response::HTTP_BAD_REQUEST);
        } elseif ($exception instanceof TokenExpiredException) {
            return response()->json(['error' => 'token is is Expired'], Response::HTTP_BAD_REQUEST);
        } elseif ($exception instanceof JWTException) {
            return response()->json(['error' => 'token is not provided'], Response::HTTP_BAD_REQUEST);
        }
        return parent::render($request, $exception);
    }
}
