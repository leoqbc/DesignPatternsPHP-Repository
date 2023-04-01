<?php

namespace App\Providers;

use Architecture\Infrastructure\Repository\Eloquent\EloquentRepositoryStrategy;
use Architecture\Infrastructure\Repository\RabbitMQ\RabbitMQRepositoryStrategy;
use Architecture\Infrastructure\Repository\Repository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(Repository::class, function () {
            return new Repository(
                new RabbitMQRepositoryStrategy()
            );
        });
    }
}
