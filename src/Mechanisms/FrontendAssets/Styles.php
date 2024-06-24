<?php

namespace OrbtUI\Mechanisms\FrontendAssets;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Styles extends OrbtUI
{

    public function mount()
    {

        $this->component()->tag('style');

        $this->component()
             ->properties()
                ->add('href', '/orbtui/css/style.bundle.css')
                ->add('rel', 'stylesheet')
                ->add('type', 'text/css');

        $plugins = new Component('style');

        $plugins->properties()
                ->add('href', '/orbtui/css/plugins.bundle.css')
                ->add('rel', 'stylesheet')
                ->add('type', 'text/css');

        $this->component()->append($plugins);

    }

}
