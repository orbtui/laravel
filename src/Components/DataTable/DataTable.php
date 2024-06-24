<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;
use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class DataTable extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) {

        $this->component()->tag('div');

        $this->component()
            ->classes()
                ->add('table-responsive')
                ->add('shadow-sm');

        $this->component()
            ->alpine()
                ->add(Alpine::DATA, `{ items: [],
                    getItems(){
                        var array = []
                        var checkboxes = document.querySelectorAll('input[x-model=items]')

                        for (var i = 0; i < checkboxes.length; i++) {
                            array.push(checkboxes[i].value)
                        }

                        return array;
                    }
                }`);

        $this->component()->append(new Component());

    }

}
