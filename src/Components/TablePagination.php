<?php

namespace OrbtUI\Components;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use OrbtUI\OrbtUI;

class TablePagination extends OrbtUI
{

    public LengthAwarePaginator $paginator;
    public array $pages = [];

    public function __construct(
        LengthAwarePaginator $items = null,
        public string $backwardText = '',
        public string $forwardText = '',
        public string $itensPerPageText = 'Items per Page',
        public array  $pageSizes = []
    ) {

        if ($items) {

            $this->paginator = $items;

            $totalPages    = round($items->total() / $items->perPage(), 0, PHP_ROUND_HALF_UP);

            for ($page = 0; $page < $totalPages; $page++) {
                array_push($this->pages, $page);
            }

        }

        $this->properties()->add('id', 'app-footer');

        $this->classes()
        ->add('app-footer shadow')
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
