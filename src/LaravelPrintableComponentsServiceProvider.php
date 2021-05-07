<?php

namespace Vectorwyse\LaravelPrintableComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelPrintableComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'laravel-printable-components');

        Blade::component('laravel-printable-components::printable.document', 'printable.document');
        Blade::component('laravel-printable-components::printable.page', 'printable.page');
    }
}
