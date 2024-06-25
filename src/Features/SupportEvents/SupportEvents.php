<?php

namespace OrbtUI\Features\SupportEvents;

use Livewire\Features\SupportEvents\Event;

use function Livewire\store;

trait SupportEvents
{

    public function call($event, ...$params)
    {
        $event = new Event($event, $params);

        store($this)->push('dispatched', $event);

        return $event;
    }

}
