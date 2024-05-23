<?php

namespace OrbtUI\Exceptions;

use Exception;

class ClassesNotArrayException extends Exception
{

    public function __construct()
    {
        parent::__construct('Classes property need to be passed as an array.');
    }

}
