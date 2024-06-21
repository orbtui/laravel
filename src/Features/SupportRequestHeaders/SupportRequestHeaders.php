<?php

namespace OrbtUI\Features\SupportRequestHeaders;

trait SupportRequestHeaders
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
