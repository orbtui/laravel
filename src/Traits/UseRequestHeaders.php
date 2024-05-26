<?php

namespace OrbtUI\Traits;

use OrbtUI\Utils\RequestHeaders;

/**
 * @props $alpine
 */
trait UseRequestHeaders
{

    private ?RequestHeaders $headers = null;

    public function headers()
    {

        if (!$this->headers) {
            $this->headers = new RequestHeaders();
        }

        return $this->headers;

    }

}
