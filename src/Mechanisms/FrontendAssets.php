<?php

namespace OrbtUI\Mechanisms;

use Illuminate\Http\Request;
use OrbtUI\Traits\UseRequestHeaders;

class FrontendAssets
{

    use UseRequestHeaders;

    public function fonts(Request $request, $route)
    {
        return response()->file(__DIR__.'/../../resources/dist/fonts/' . $route, $this->headers()->contentType('font/woff2')->getHeaders());
    }

    public function styles(Request $request, $route)
    {
        return response()->file(__DIR__.'/../../resources/dist/css/' . $route, $this->headers()->contentType('text/css; charset=utf-8')->getHeaders());
    }

    public function scripts(Request $request, $route)
    {
        return response()->file(__DIR__.'/../../resources/dist/js/' . $route, $this->headers()->contentType('application/javascript; charset=utf-8')->getHeaders());
    }

    public function images(Request $request, $route)
    {
        return response()->file(__DIR__.'/../../resources/dist/images/' . $route, $this->headers()->contentType('image')->getHeaders());
    }

}
