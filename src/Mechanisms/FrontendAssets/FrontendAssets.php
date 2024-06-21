<?php

namespace OrbtUI\Mechanisms\FrontendAssets;

use OrbtUI\Features\SupportRequestHeaders\SupportRequestHeaders;

use Illuminate\Http\Request;

class FrontendAssets
{

    use SupportRequestHeaders;

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

    public function media(Request $request, $route)
    {
        return response()->file(__DIR__.'/../../resources/dist/media/' . $route, $this->headers()->contentType('image/svg+xml')->getHeaders());
    }

}
