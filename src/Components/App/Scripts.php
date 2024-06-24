<?php

namespace OrbtUI\Components\App;


use OrbtUI\OrbtUI as Component;

class Scripts extends Component
{

    public function mount()
    {

        $this->tag('script');

        $this
             ->properties()
                ->add('type', 'text/javascript')
                ->add('src', '/orbtui/js/scripts.bundle.js');

        $plugins = new Component('script');

        $plugins->properties()
            ->add('type', 'text/javascript')
            ->add('src', '/orbtui/js/plugins.bundle.js');

        $this->append($plugins);

    }

}
