<?php

namespace Sfolador\LaravelEloquentToggle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sfolador\LaravelEloquentToggle\LaravelEloquentToggle
 */
class LaravelEloquentToggle extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sfolador\LaravelEloquentToggle\LaravelEloquentToggle::class;
    }
}
