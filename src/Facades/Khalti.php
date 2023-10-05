<?php

namespace Anil\Khalti\Facades;

use Illuminate\Support\Facades\Facade;

class Khalti extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'khalti';
    }

}