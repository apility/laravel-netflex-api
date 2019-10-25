<?php

namespace Netflex\Facades;

use Illuminate\Support\Facades\Facade;

class NetflexAPI extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'netflex-api';
    }
}
