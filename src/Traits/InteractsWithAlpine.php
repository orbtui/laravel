<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Alpine;

/**
 * @props $alpine
 */
trait InteractsWithAlpine
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
