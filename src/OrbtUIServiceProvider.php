<?php

namespace OrbtUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

use OrbtUI\Components\Grid\ {
    Grid,
    Column
};

use OrbtUI\Components\Layout\ {
    Layout
};

use OrbtUI\Components\Header\ {
    Header
};

use OrbtUI\Components\Sidebar\ {
    Sidebar,
    SidebarMenu,
    SidebarMenuItem,
    SidebarMenuGroup,
    SidebarFooter
};

use OrbtUI\Components\Page\ {
    Page,
    PageToolbar,
    PageContent
};

use OrbtUI\Components\DataTable\ {
    DataTable,
    Table,
    TableHead,
    TableHeader,
    TableBody,
    TableRow,
    TableCell
};

use OrbtUI\Components\Form\ {
    Form
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

        Blade::component('grid', Grid::class);
        Blade::component('column', Column::class);

        Blade::component('header', Header::class);

        Blade::component('sidebar', Sidebar::class);
        Blade::component('sidebar-menu', SidebarMenu::class);
        Blade::component('sidebar-menu-item', SidebarMenuItem::class);
        Blade::component('sidebar-menu-group', SidebarMenuGroup::class);
        Blade::component('sidebar-footer', SidebarFooter::class);

        Blade::component('page',         Page::class);
        Blade::component('page-toolbar', PageToolbar::class);
        Blade::component('page-content', PageContent::class);

        Blade::component('data-table', DataTable::class);
        Blade::component('table', Table::class);
        Blade::component('table-head', TableHead::class);
        Blade::component('table-header', TableHeader::class);
        Blade::component('table-body', TableBody::class);
        Blade::component('table-row', TableRow::class);
        Blade::component('table-cell', TableCell::class);

        Blade::component('form', Form::class);

    }

}
