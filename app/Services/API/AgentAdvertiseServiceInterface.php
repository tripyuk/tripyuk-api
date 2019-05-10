<?php

namespace App\Services\API;

use App\Http\Interfaces\AdvertiserInterface;

class AgentAdvertiseService implements AdvertiserInterface
{
    public function setListing($request)
    {
//        print_r($request->all());
        return $request->all();
    }
}
