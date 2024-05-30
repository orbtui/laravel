<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Loading extends OrbtUI
{

    public function __construct() {

       $this->component()->view('loading');

    }

}
