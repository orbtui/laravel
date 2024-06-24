<?php

namespace OrbtUI\Components\App;


use OrbtUI\OrbtUI as Component;

class Styles extends Component
{

    public function mount()
    {

        $this->tag('link');

        $this
             ->properties()
                ->add('href', '/orbtui/css/style.bundle.css')
                ->add('type', 'text/css')
                ->add('rel', 'stylesheet');

        $plugins = new Component('link');

        $plugins->properties()
                ->add('href', '/orbtui/css/plugins.bundle.css')
                ->add('rel', 'stylesheet')
                ->add('type', 'text/css');

        $this->append($plugins);

    }

}
