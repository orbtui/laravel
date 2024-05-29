<?php

namespace OrbtUI\Traits;

use Livewire\WithPagination;

trait UsePagination
{

    use WithPagination;

    public $pageSizes = [10, 20, 30, 40, 50];
    public $perPage = 20;

    public function pageSize($size = 20)
    {
        if (!in_array($size, $this->pageSizes)) {
            $size = $this->perPage;
        }
        $this->perPage = $size;
        $this->resetPage();
    }

}
