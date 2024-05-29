<?php

namespace OrbtUI\Providers;

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
        $this->registerTranslations();

    }

    /**
     * Bootstrap the application services.
     */
    public function boot() {

        $this->bootComponents();

    }

    private function registerConfig()
    {
        $this->publishes([__DIR__.'/../../config/orbtui.php' => config_path('orbtui')]);
    }

    private function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }

    private function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'ui');
    }

    private function registerTranslations()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'ui');
    }

    private function bootComponents()
    {
        Blade::componentNamespace('\\OrbtUI\\Components', 'ui');
    }

}
