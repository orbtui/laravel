<?php

namespace OrbtUI\Features\SupportModals;

use OrbtUI\Features\SupportEvents\SupportEvents;

trait SupportModals
{

    use SupportEvents;

    public function openModal(string $name, string $closeParent = null)
    {
        $this->call('openModal', name: $name);
    }

    public function closeModal($name)
    {
        $this->call('closeModal', name: $name);
    }

}
