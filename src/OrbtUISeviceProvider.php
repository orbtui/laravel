<?php

namespace OrbtUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class OrbtUIServiceProvider extends ServiceProvider {

    /**
     * Register the application services.
     */
    public function register() {

        parent::register();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'orbtui');

    }

    /**
     * Bootstrap the application services.
     */
    public function boot() {

        Blade::componentNamespace('OrbtUI\\Components', 'orbtui');

    }

}
