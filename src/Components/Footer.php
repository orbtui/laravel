<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Footer extends OrbtUI
{

    public function __construct(string $backgroundColor = '', bool $fixed = false)
    {

        $this->properties()->add('id', 'app-footer');

        $this->classes()
            ->add('app-footer')
            ->protect([
                'app-footer'
            ]);

        $this->alpine()
            ->add('x-data', '{ showFooter: true }')
            ->add('x-show', 'showFooter')
            ->add('x-transition');

        if ($fixed) {

            $this->classes()
                ->add('shadow')
                ->add('bg-' . ($backgroundColor === '' ? 'white' : $backgroundColor));

            $this->alpine()
                ->add('x-init', 'fixedFooter = true')
                ->add('x-on:ui-hide-footer.window', 'showFooter = false')
                ->add('x-on:ui-show-footer.window', 'showFooter = true; fixedFooter = true');

        } else {

            $this->classes()->add('bg-' . $backgroundColor == '' ? '' : $backgroundColor);

            $this->alpine()
                ->add('x-init', 'fixedFooter = false')
                ->add('x-on:ui-hide-footer.window', 'showFooter = false')
                ->add('x-on:ui-show-footer.window', 'showFooter = true; fixedFooter = false');

        }

    }

}
