<?php

namespace App\Providers;

use App\Contracts\GivetemRepositoryInterface;
use App\Contracts\UserRepositoryInterface;
use App\Repository\GivetemRepository;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(GivetemRepositoryInterface::class, GivetemRepository::class);
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
