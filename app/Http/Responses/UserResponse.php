<?php


namespace App\Http\Responses;


class UserResponse extends BaseResponse
{
    public static function successLogin($data)
    {
        return [
            'error' => 0,
            'status' => 200,
            'data' => $data,
            'message' => 'Success login',
        ];
    }
    public static function validateEmailAndPassword()
    {
        return [
            'status' => 401,
            'message' => 'These credentials do not match our records',
        ];
    }
}
