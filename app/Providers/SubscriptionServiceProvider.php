<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\SubscriptionInterface;
use App\Repositories\SubscriptionRepository;

class SubscriptionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SubscriptionInterface::class, SubscriptionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
