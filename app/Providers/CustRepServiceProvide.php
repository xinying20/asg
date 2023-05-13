<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ICustRes;
use \App\Repositories\CustRepos;

class CustRepServiceProvide extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(ICustRes::class, CustRepos::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
