<div {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!} x-data="{ items: [] }" x-on:ui-table-items-selected.camel.window="items = $event.detail.items" x-show="items.length > 0" x-transition>

    <div class="col-md-12 d-flex align-items-center gap-2 gap-lg-3 mx-15 mx-lg-17">

        <span class="me-3 fs-4">
            <x-ui::icon type="duotone" name="arrow-turn-left-up" size="5" marginEnd="2" />
            <span x-text="items.length"></span>
        </span>

        {{ $slot }}

    </div>

</div>
