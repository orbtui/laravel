<div class="modal-header d-block">
<div class="row">
    <div class="col-md-10">
        @if ($modalLabel)
            <h2 class="fs-6 fw-normal mb-1">{{ $modalLabel }}</h2>
        @endif

        @if ($modalHeading)
            <h3 class="fw-normal fs-1">{{ $modalHeading }}</h3>
        @endif
    </div>
    <div class="col-md-2 text-end">

        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" x-on:click="{{ $open }} = !{{ $open }}">
            <x-ui::icon name="xmark" />
        </div>
    </div>
</div>

</div>
