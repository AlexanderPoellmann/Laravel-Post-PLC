<?php

namespace AlexanderPoellmann\LaravelPostPlc\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlexanderPoellmann\LaravelPostPlc\LaravelPostPlc
 */
class LaravelPostPlc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AlexanderPoellmann\LaravelPostPlc\LaravelPostPlc::class;
    }
}
