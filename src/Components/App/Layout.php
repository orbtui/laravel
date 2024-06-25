<?php

namespace OrbtUI\Components\App;


use OrbtUI\OrbtUI as Component;

class Layout extends Component
{

    public function __construct(
        public ?string $title = null,
        public string $loadingText = 'Loading...'
    ) {

        $this->tag('html');

        $head = $this->createHead();

        $this->parentOf($head);

        $body = $this->createBody();

        $this->parentOf($body);

    }

    private function createHead()
    {

        $head = new Component('head');

        $title = new Component('title');
        $title->content($this->title);

        $head->parentOf($title);

        $charset = new Component('meta');

        $charset->properties()->push([
            'chartset' => 'utf-8'
        ]);

        $head->parentOf($charset);

        $viewport = new Component('meta');

        $viewport->properties()->push([
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1'
        ]);

        $head->parentOf($viewport);

        $style = new Component('link');

        $style->properties()->push([
            'href' => '/orbtui/css/style.bundle.css',
            'type' => 'text/css',
            'rel' => 'stylesheet'
        ]);

        $head->parentOf($style);

        $plugins = new Component('link');

        $plugins->properties()->push([
            'href' => '/orbtui/css/plugins.bundle.css',
            'type' => 'text/css',
            'rel' => 'stylesheet'
        ]);

        $head->parentOf($plugins);

        return $head;

    }

    private function createBody()
    {

        $body = new Component('body');

        $body->classes()->push([
            'app-default'
        ]);

        $body->properties()->push([
            'data-kt-app-layout'               => 'light-sidebar',
            'data-kt-app-header-fixed'         => 'true',
            'data-kt-app-sidebar-enabled'      => 'true',
            'data-kt-app-sidebar-fixed'        => 'true',
            'data-kt-app-sidebar-hoverable'    => 'true',
            'data-kt-app-sidebar-push-header'  => 'true',
            'data-kt-app-sidebar-push-toolbar' => 'true',
            'data-kt-app-sidebar-push-footer'  => 'true',
            'data-kt-app-toolbar-enabled'      => 'true',
            'data-kt-app-page-loading-enabled' => 'true',
            'data-kt-app-page-loading'         => 'on'
        ]);

        $loading = $this->createLoading();

        $this->parentOf($loading);

        $root = new Component('div');

        $root->properties()->push([
            'id' => 'kt_app_root'
        ]);

        $root->classes()->push([
            'd-flex',
            'flex-column',
            'flex-root',
            'app-root',
        ]);

        $page = new Component('div');

        $page->properties()->push([
            'id' => 'kt_app_page'
        ]);

        $page->classes()->push([
            'app-page',
            'flex-column',
            'flex-column-fluid'
        ]);

        $page->parentOf(new Component());

        $root->parentOf($page);

        $body->parentOf($root);

        $scripts = new Component('script');

        $scripts->properties()->push([
            'type' => 'text/javascript',
            'src' => '/orbtui/js/scripts.bundle.js'
        ]);

        $body->parentOf($scripts);

        $plugins = new Component('script');

        $plugins->properties()->push([
            'type' => 'text/javascript',
            'src' => '/orbtui/js/plugins.bundle.js'
        ]);

        $body->parentOf($plugins);

        return $body;

    }

    private function createLoading()
    {

        $loader = new Component('div');

        $loader->classes()->push([
            'page-loader',
            'flex-column'
        ]);

        $spinner = new Component('span ');

        $spinner->classes()->push([
            'spinner-border',
            'text-primary',
        ]);

        $spinner->properties()->push([
            'role' => 'status'
        ]);

        $loader->parentOf($spinner);

        $text = new Component('span');

        $text->classes()->push([
            'text-gray-800',
            'fs-6',
            'fw-semibold',
            'mt-5'
        ]);

        $text->content($this->loadingText);

        $loader->parentOf($text);

        return $loader;

    }

}
