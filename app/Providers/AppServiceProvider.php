<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'App\Contracts\CategoryControllerInterface',
            'App\Services\CategoryControllerService'
        );
        $this->app->bind(
            'App\Contracts\PostControllerInterface',
            'App\Services\PostControllerService'
        );
        $this->app->bind(
            'App\Contracts\TemplateInterface',
            'App\Services\TemplateService'
        );
        $this->app->bind(
            'App\Contracts\HomeControllerInterface',
            'App\Services\HomeControllerService'
        );
        $this->app->bind(
            'App\Contracts\TeamInterface',
            'App\Services\TeamControllerService'
        );
        $this->app->bind(
            'App\Contracts\FeedbackControllerInterface',
            'App\Services\FeedbackControllerService'
        );
        $this->app->bind(
            'App\Contracts\ClientControllerInterface',
            'App\Services\ClientControllerService'
        );
    }
}
