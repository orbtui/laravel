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

        $this->registerConfig();
        $this->registerRoutes();
        $this->registerViews();


    }

    /**
     * Bootstrap the application services.
     */
    public function boot() {

        Blade::componentNamespace('OrbtUI\\Components', 'ui');

    }

    private function registerConfig()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/orbtui.php', 'orbtui');
    }

    private function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    private function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui');
    }

}
