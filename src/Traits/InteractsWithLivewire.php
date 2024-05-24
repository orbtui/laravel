<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Livewire;

/**
 * @props $livewire
 */
trait InteractsWithLivewire
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
