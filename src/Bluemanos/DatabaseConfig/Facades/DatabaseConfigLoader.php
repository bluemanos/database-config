<?php

namespace Bluemanos\DatabaseConfig\Facades;

use Illuminate\Support\Facades\Facade;

class DatabaseConfigLoader extends Facade
{
    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor()
    {
        return 'dbconfig';
    }
}
