<?php

namespace App\Http\Abstraction;

use App\Http\Interfaces\AdvertiserInterface;
use App\Http\Requests\UserAdvertiseRequest;

abstract class Advertising
{
    // Factory method
    abstract protected function makeAdvertise(): AdvertiserInterface;


    /**
     * action for advertise
     *
     * @param UserAdvertiseRequest
     * @return \Illuminate\Http\Response
     */
    public function takeActionAdvertise($request)
    {
        $advertiser = $this->makeAdvertise();
        return $advertiser->setListing($request);
    }
}
