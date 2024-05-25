<?php

namespace OrbtUI\Components;

use Closure;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;
use OrbtUI\OrbtUI;

class Pagination extends OrbtUI {

    private LengthAwarePaginator $paginator;
    private array $elements;

    public function __construct(LengthAwarePaginator $paginator = null)
    {
        $this->paginator = $paginator;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {



        return view('ui::paginator', [
            'classAttributes' => $this->classes()->build(),
            'styleAttributes' => $this->styles()->build(),
            'paginator' => $this->paginator,
            'elements' => $this->elements
        ]);

    }

}
