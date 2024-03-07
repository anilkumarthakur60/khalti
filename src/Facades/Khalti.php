<?php

namespace Anil\Khalti\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Http;

class Khalti extends Facade
{

    protected static function getFacadeAccessor():string
    {
        return 'khalti';
    }

}