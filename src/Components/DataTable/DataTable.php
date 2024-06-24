<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;

use OrbtUI\OrbtUI as Component;

class DataTable extends Component
{

    public function __construct(
        public bool $blank = false
    ) { }

    protected function mount()
    {

        $this->tag('div');

        $this
            ->classes()
                ->add('table-responsive')
                ->add('shadow-sm');

        $this
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

        $this->parentOf(new Component());

    }

}
