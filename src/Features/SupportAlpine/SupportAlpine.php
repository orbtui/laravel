<?php

namespace OrbtUI\Features\SupportAlpine;

trait SupportAlpine
{

    private ?Alpine $alpine = null;

    public function alpine()
    {

        if (!$this->alpine) {
            $this->alpine = new Alpine();
        }

        return $this->alpine;

    }

}
