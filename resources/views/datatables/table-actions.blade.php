<div {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>

    <div class="app-container container-fluid d-flex flex-row flex-stack py-5 py-md-3">

        <div class="col-md-12 d-flex align-items-center mx-9">

            <div class="d-inline-block text-gray-900">

                <span class="me-6 fs-5">
                    <x-ui::icon type="regular" name="arrow-turn-left-up" size="6" marginEnd="2" />
                    <span x-text="items.length" class="fw-normal fs-5"></span>
                </span>

            </div>

            <div class="d-inline-flex align-items-center gap-3 ms-3">
                {{ $slot }}
            </div>

        </div>

    </div>

</div>
