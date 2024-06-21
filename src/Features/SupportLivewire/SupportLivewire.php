<?php

namespace OrbtUI\Features\SupportLivewire;

trait SupportLivewire
{

    private ?Livewire $livewire = null;

    public function livewire()
    {

        if (!$this->livewire) {
            $this->livewire = new Livewire();
        }

        return $this->livewire;

    }

}
