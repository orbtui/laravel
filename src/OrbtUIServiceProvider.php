<?php

namespace OrbtUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

use OrbtUI\Components\Grid\ {
    Row,
    Column
};

use OrbtUI\Components\Layout\ {
    Layout
};

use OrbtUI\Components\Header\ {
    Header
};

class OrbtUIServiceProvider extends ServiceProvider {

    /**
     * Register the application services.
     */
    public function register() {

        $this->registerConfig();
        $this->registerRoutes();
        $this->registerViews();
        $this->registerTranslations();
        $this->registerCommands();

    }

    /**
     * Bootstrap the application services.
     */
    public function boot() {

        $this->bootComponents();

    }

    protected function registerConfig()
    {

        $config = __DIR__.'/../config/orbtui.php';

        $this->publishes([$config => base_path('config/orbtui.php')], ['orbtui', 'orbtui:config']);

        $this->mergeConfigFrom($config, 'orbtui');

    }

    protected function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui');
    }

    protected function registerTranslations()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ui');
    }

    protected function registerCommands()
    {

    }

    protected function bootComponents()
    {

        Blade::component('layout', Layout::class);

        Blade::component('row', Row::class);
        Blade::component('column', Column::class);

        Blade::component('header', Header::class);

    }

}
