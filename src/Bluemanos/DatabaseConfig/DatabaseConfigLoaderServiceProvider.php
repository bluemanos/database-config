<?php

namespace Bluemanos\DatabaseConfig;

use Illuminate\Support\ServiceProvider;

class DatabaseConfigLoaderServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->package('bluemanos/database-config');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('dbconfig.loader', function ($app) {
            return new DatabaseConfigLoader(new DatabaseConfigLoaderModel());
        }, true);

        $dbconfig = new DatabaseConfigLoaderRepository($this->app['dbconfig.loader'], $this->app['env']);

        $this->app->instance('dbconfig', $dbconfig);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
