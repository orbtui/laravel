<?php

namespace OrbtUI\Components;

use Illuminate\Pagination\LengthAwarePaginator;
use OrbtUI\OrbtUI;

class Pagination extends OrbtUI
{

    public function __construct(
        public ?LengthAwarePaginator $paginator = null,
        public string $backwardText = '',
        public string $forwardText  = '',
        public string $id           = '',
        public string $itemsPerPageText = 'Items per Page',
        public array  $pages = [],
        public array  $pageSizes = []
    ) {

        $this->component()->view('pagination.pagination');

        for ($page = 0; $page < $paginator->lastPage(); $page++) {
            array_push($this->pages, $page+1);
        }

        $this->properties()->add('id', 'app-footer');

        $this->classes()
            ->add('app-footer')
            ->add('bg-body')
            ->add('shadow')
            ->protect([
                'app-footer'
            ]);

        $this->alpine()
            ->add('x-init', 'fixedFooter = true')
            ->add('x-data', '{ showPagination: true }')
            ->add('x-show', 'showPagination')
            ->add('x-on:ui-hide-footer.window', 'showPagination = false')
            ->add('x-on:ui-show-footer.window', 'showPagination = true; fixedFooter = true')
            ->add('x-transition');

    }

}
