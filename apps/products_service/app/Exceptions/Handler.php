<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Results\Result;
use App\Traits\ApiResponser;

class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
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
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function render($request, Exception $exception)
    {

        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          $result= New Result();

          $result->addError('[ERR_ROUTE_NOT_FOUND] # [] # Invalid route');
          $result->setStatus('FAIL');
          $result->setCode(404);

          return $this->errorResponse(
            $result->getAllError(),
            $result->getAllMessage(),
            $result->getCode(),
            'this is posible because that your route is incorrectly'
          );
        }
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException) {
            $result= New Result();

            $result->addError('[ERR_VERB_HTTP_INVALID] # [] # The verb or method http is not allowed for the server');
            $result->addMessage('[ERR_CHECK_ROUTE] # The route requested could be incorrectly ');
            $result->addMessage('[ERR_CHECK_VERB] # The verb or method http could be incorrectly, remember check the api documentation or check if your verb o method http is [GET, POST, PUT, DELETE]');
            $result->setStatus('FAIL');
            $result->setCode(405);

            return $this->errorResponse(
              $result->getAllError(),
              $result->getAllMessage(),
              $result->getCode(),
              'this is posible because your method or verb http is incorrectly for the route requested'
            );

        }
        return parent::render($request, $exception);

    }
}
