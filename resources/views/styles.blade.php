<link href="{{ URL::to('/orbtui/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::to('/orbtui/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />

@if($customCss)
<style>
    {!! $customCss !!}
</style>
@endif
