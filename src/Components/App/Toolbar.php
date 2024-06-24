<?php

namespace OrbtUI\Components\App;


use OrbtUI\OrbtUI as Component;

class Toolbar extends Component
{

    public function __construct(
        public ?string $title = null
    ) {

        $this->tag('div');

        $this
             ->classes()
                ->add('app-toolbar')
                ->add('py-3')
                ->add('py-lg-6');

        $container = $this->createContainer();

        $heading = $this->createHeading();

        $actions = $this->createActions();

        $container->parentOf($heading);
        $container->parentOf($actions);

        $this->parentOf($container);

    }

    private function createContainer()
    {
        $container = new Component('div');

        $container->classes()->push([
            'app-container',
            'container-fluid',
            'd-flex',
            'flex-stack'
        ]);

        return $container;

    }

    private function createHeading()
    {

        $pageTitle = new Component('div');

        $pageTitle->classes()->push([
            'page-title',
            'd-flex',
            'flex-column',
            'justify-content-center',
            'flex-wrap',
            'me-3',
        ]);

        $pageHeading = new Component('div');

        $pageHeading->classes()->push([
            'page-heading',
            'd-flex',
            'text-gray-900',
            'fw-bold',
            'fs-3',
            'flex-column',
            'justify-content-center',
            'my-0',
        ]);

        $pageHeading->parentOf($this->title);

        $pageTitle->parentOf($pageHeading);

        return $pageTitle;

    }

    private function createActions()
    {

        $actions = new Component('div');

        $actions->classes()->push([
            'd-flex',
            'align-items-center',
            'gap-2',
            'gap-lg-3',
        ]);

        $actions->parentOf(new Component());

        return $actions;

    }

}
