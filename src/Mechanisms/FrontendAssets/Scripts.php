<?php

namespace OrbtUI\Mechanisms\FrontendAssets;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Scripts extends OrbtUI
{

    public function mount()
    {

        $this->component()->tag('script');

        $this->component()
             ->properties()
                ->add('src', '/orbtui/js/scripts.bundle.js');

        $plugins = new Component('script');

        $plugins->properties()
                ->add('src', '/orbtui/js/plugins.bundle.js');

        $this->component()->append($plugins);

    }

}
