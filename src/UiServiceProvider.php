<?php

namespace YourFightSite\Ui;

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the package services.
     *
     * @return void
     */
    public function boot()
    {
        /** @var \Illuminate\Contracts\View\Factory $view */
        $view = $this->app->make('view');

        $view->addNamespace('ui', [
            __DIR__.'/../resources/views',
        ]);
    }
}
