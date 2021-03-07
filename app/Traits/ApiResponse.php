<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponse
{

    // related to the return of API response on the site
    public function successResponse($data, $code = Response::HTTP_OK){
        //old code
        // return response()->json(['data' => $data], $code);
        // this code is changes since the message to return is already formatted by API responser of each site
        // response is from the site
        return response($data,$code)->header('Content-Type', 'application/json');
    }

    // error generated within the API gateway
    public function errorResponse($message, $code){
        return response()->json(['error' => $message,'code' =>$code], $code);
    }

    // related to the error return of API response on the site
    public function errorMessage($message, $code){
        return response($message,$code)->header('Content-Type', 'application/json');
    }
}