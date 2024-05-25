<div {{ $attributes->class($classAttributes)->merge(['style' => $styleAttributes]) }} x-data="{ showFooter: true }" x-show="showFooter" x-on:ui-table-items-selected.camel.window="showFooter = $event.detail.items.length === 0 ? true : false" x-transition>

    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">

        <div class="col-md-12 d-flex align-items-center gap-2 gap-lg-3 mx-15 mx-lg-17">

            {{ $slot }}

        </div>

    </div>

</div>
