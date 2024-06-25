<?php

namespace OrbtUI\Features\SupportLivewire;

interface LivewireDirectives
{

    public const ON_CLICK      = 'wire:click';
    public const ON_CLICK_AWAY = 'wire:click.away';

    public const SUBMIT = 'wire:submit';

    public const LOADING = 'wire:loading';
    public const TARGET  = 'wire:target';

    public const MODEL = 'wire:model';

    public const IGNORE      = 'wire:ignore';
    public const IGNORE_SELF = 'wire:ignore.self';

}
