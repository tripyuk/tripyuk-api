<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Factory\AgentAdvertising;
use App\Http\Factory\UserAdvertising;
use App\Http\Requests\UserAdvertiseRequest;
use App\Http\Responses\UserResponse;
use App\Services\API\UserAdvertiseService;
use Illuminate\Http\Response;

class AdvertiseController extends Controller
{
    /**
     * create advertise api
     *
     * @param UserAdvertiseRequest
     * @return \Illuminate\Http\Response
     */
    public function createAdvertise(UserAdvertiseRequest $request)
    {
        //TODO
        //make validate if users is agent or single user
        //example like below
        return response(UserResponse::successLogin($this->agent($request)), Response::HTTP_OK);
    }

    private function agent($request)
    {
        $agent = new AgentAdvertising();
        return $agent->takeActionAdvertise($request); // Output: Asking about design patterns
    }

    private function user($request)
    {
        $user = new UserAdvertising();
        return $user->takeActionAdvertise($request); // Output: Asking about design patterns
    }
}
