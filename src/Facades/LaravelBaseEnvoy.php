<?php

namespace B4mtech\LaravelBaseEnvoy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \B4mtech\LaravelBaseEnvoy\LaravelBaseEnvoy
 */
class LaravelBaseEnvoy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \B4mtech\LaravelBaseEnvoy\LaravelBaseEnvoy::class;
    }
}
