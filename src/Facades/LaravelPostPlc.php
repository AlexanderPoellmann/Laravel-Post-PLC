<?php

namespace AlexanderPoellmann\LaravelPostPlc\Facades;

use AlexanderPoellmann\LaravelPostPlc\Enums\ServiceMethods;
use Illuminate\Support\Facades\Facade;
use RicorocksDigitalAgency\Soap\Response\Response;
use Spatie\LaravelData\Data;

/**
 * @see \AlexanderPoellmann\LaravelPostPlc\LaravelPostPlc
 *
 * @method static string endpoint()
 * @method static string getClientId()
 * @method static string getOrgUnitId()
 * @method static string getOrgUnitGuid()
 *
 * @method static Response call(ServiceMethods $method, Data $data)
 */
class LaravelPostPlc extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlexanderPoellmann\LaravelPostPlc\LaravelPostPlc::class;
    }
}
