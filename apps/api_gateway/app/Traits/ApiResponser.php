<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Build a success response
     * @param  string|array $data
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data = [], $message ,$code = Response::HTTP_OK)
    {
        $response = [
           'success' => true,
           'data'    => $data,
           'message' => $message,
       ];
       return response()->json($response, $code);//->header('Content-Type','application/json');
    }

    /**
     * Build error responses
     * @param  string $message
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($data = [], $message, $code = 404)
    {
      $response = [
         'success' => false,
         'data'    => $data,
         'message' => $message,
       ];
       return response()->json($response, $code);//->header('Content-Type','application/json');
    }
}
