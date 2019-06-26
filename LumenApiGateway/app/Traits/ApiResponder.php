<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponder
{
    /**
     * Build success response
     *
     * @param string/array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Build success response
     *
     * @param string/array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}
