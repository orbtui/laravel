<?php

namespace OrbtUI\Features\SupportRequestHeaders;

class RequestHeaders
{

    private $headers = [];

    public function __construct()
    {
        $this->contentType('text/html; charset=utf-8');
        $this->expires(strtotime('+1 year'));
        $this->cacheControl('public, max-age=31536000');
        $this->lastModified(sprintf('%s GMT', gmdate('D, d M Y H:i:s', now()->getTimestamp())));
    }

    public function contentType(string $value)
    {
        $this->headers['Content-Type'] = $value;
        return $this;
    }

    public function expires(string $value)
    {
        $this->headers['Expires'] = $value;
        return $this;
    }

    public function cacheControl(string $value)
    {
        $this->headers['Cache-Control'] = $value;
        return $this;
    }

    public function lastModified(string $value)
    {
        $this->headers['Last-Modified'] = $value;
        return $this;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

}
