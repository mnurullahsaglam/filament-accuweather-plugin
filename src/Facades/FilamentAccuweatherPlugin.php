<?php

namespace NurullahSaglam\FilamentAccuweatherPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NurullahSaglam\FilamentAccuweatherPlugin\FilamentAccuweatherPlugin
 */
class FilamentAccuweatherPlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NurullahSaglam\FilamentAccuweatherPlugin\FilamentAccuweatherPlugin::class;
    }
}
