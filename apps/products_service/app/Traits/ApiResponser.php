<?php

namespace App\Traits;

use Illuminate\Http\Response;
use App\Http\Resources\MessageResource;
use App\Http\Resources\ErrorResource;



trait ApiResponser
{
    /**
     * Build a success response
     * @param  string|array $data
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data = array(), $message ,$code = Response::HTTP_OK, $description='')
    {   
        $response = [
           'success' => true,
           'description'=> $description,
           'data'    => $data,
           'errors' => array(),
           'messages' =>  MessageResource::collection($message),

       ];
       return response()->json($response, $code);//->header('Content-Type','application/json');
    }

    /**
     * Build error responses
     * @param  string $message
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($errors = array(), $message, $code = 500, $description='')
    {

      $response = [
         'success' => false,
         'description'=> $description,
         'data' => array(),
         'errors'    => ErrorResource::collection($errors),
         'messages' => MessageResource::collection($message),

       ];
       return response()->json($response, $code);//->header('Content-Type','application/json');
    }
}
