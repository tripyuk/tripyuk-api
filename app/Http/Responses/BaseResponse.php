<?php

namespace App\Http\Responses;

class BaseResponse
{
    /**
     * Get static single data
     *
     * @param mixed
     * @return array
     */
    public static function getSingleData($data) {
        return [
            'error' => 0,
            'status' => 200,
            'message' => 'success',
            'data' => $data,
        ];
    }
}
