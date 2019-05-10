<?php

namespace App\Http\Factory;

use App\Http\Abstraction\Advertising;
use App\Http\Interfaces\AdvertiserInterface;
use App\Services\API\UserAdvertiseService;

class UserAdvertising extends Advertising
{
    protected function makeAdvertise(): AdvertiserInterface
    {
        return new UserAdvertiseService();
    }
}
