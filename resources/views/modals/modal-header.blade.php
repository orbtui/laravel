<div {!! $classAttributes !!} {!! $propertyAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>
<div class="row">
    <div class="col-md-10">
        @if ($modalLabel)
            <x-ui::text kind="heading" size="6" weight="normal">
                {{ $modalLabel }}
            </x-ui::text>
        @endif

        @if ($modalHeading)
            <x-ui::text kind="heading" weight="normal">
                {{ $modalHeading }}
            </x-ui::text>
        @endif
    </div>
    <div class="col-md-2 text-end">

        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" x-on:click="{{ $open }} = !{{ $open }}">
            <x-ui::icon name="xmark" />
        </div>
    </div>
</div>

</div>
