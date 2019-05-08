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
            'erroe' => 0,
            'status' => 200,
            'message' => 'success',
            'data' => $data,
        ];
    }
}
