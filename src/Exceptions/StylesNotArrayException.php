<?php

namespace OrbtUI\Exceptions;

use Exception;

class StylesNotArrayException extends Exception
{

    public function __construct()
    {
        parent::__construct('Styles property need to be passed as an array.');
    }

}
