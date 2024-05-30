<?php

namespace OrbtUI\Integrations;

interface AlpineDirectives
{

    const INIT = 'x-init';
    const DATA = 'x-data';
    const REF  = 'x-ref';
    const SHOW = 'x-show';

    const TRANSITION = 'x-transition';

    const ON   = 'x-on:';
    const ON_CLICK   = 'x-on:click';
    const ON_CLICK_AWAY   = 'x-on:click.away';

    const ON_CHANGE   = 'x-on:change';
    const ON_CHANGE_DEBOUNCE   = 'x-on:change.debounce';

    const BIND = 'x-bind:';
    const BIND_CLASS = 'x-bind:class';
    const BIND_CHECKED = 'x-bind:checked';

}
