<?php

namespace OrbtUI\Components\Page;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class PageToolbar extends OrbtUI
{

    public function __construct(
        public ?string $title = null
    ) {}

    protected function mount()
    {

        $this->component()->tag('div');

        $this->component()
             ->classes()
                ->add('app-toolbar')
                ->add('py-3')
                ->add('py-lg-6');

        $container = new Component('div');

        $container->classes()
                    ->add('app-container')
                    ->add('container-fluid')
                    ->add('d-flex')
                    ->add('flex-stack');

        $pageTitle = new Component('div');

        $pageTitle->classes()
                    ->add('page-heading')
                    ->add('flex-column')
                    ->add('justify-content-center')
                    ->add('flex-wrap')
                    ->add('me-3');

        $pageHeading = new Component('div');

        $pageHeading->classes()
                    ->add('page-heading')
                    ->add('d-flex')
                    ->add('text-gray-900')
                    ->add('fw-bold')
                    ->add('fs-3')
                    ->add('flex-column')
                    ->add('justify-content-center')
                    ->add('my-0');

        $pageHeading->child($this->title);

        $pageTitle->child($pageHeading);

    }

}
