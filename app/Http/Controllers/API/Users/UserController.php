<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Requests;
use App\Http\Responses\UserResponse;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();

            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;

            $data['token_type'] = 'Bearer';
            $data['token'] = $tokenResult->accessToken;
            $data['expires_at'] = Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString();

            return response(UserResponse::successLogin($data), Response::HTTP_OK);
        }
        else{
            return response(UserResponse::validateEmailAndPassword(), Response::HTTP_UNAUTHORIZED);
        }
    }

    public function register(Requests\UserRequest $request)
    {

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        $data['name'] =  $user->name;
        $data['token'] =  $tokenResult->accessToken;
        $data['expires_at'] = Carbon::parse(
            $tokenResult->token->expires_at
        )->toDateTimeString();

        return response(UserResponse::getSingleData($data));
    }
    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], Response::HTTP_OK);
    }
}
