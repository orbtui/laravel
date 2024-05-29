<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ModalDialog extends OrbtUI
{

    public function __construct(

    ) {

        $this->component()->view('modals.modal-dialog');

    }

}
