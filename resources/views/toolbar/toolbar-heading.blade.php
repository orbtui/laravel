<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ $title }}</h1>
    @if($breadcrumbs)
    <x-ui::breadcrumbs :items="$breadcrumbs" />
    @endif
</div>
