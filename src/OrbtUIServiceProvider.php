<?php

namespace OrbtUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use OrbtUI\Components\Button;

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

        Blade::component('button', Button::class);

    }

}
