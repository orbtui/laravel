@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

@props(['scrollIntoViewJsSnippet' => $scrollIntoViewJsSnippet])

@if ($paginator)
<div {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>

    <div class="app-container container-fluid py-5 py-md-3">

        <div class="row text-gray-900">

            <div class="col-md-6 fs-6">

                <div class="d-inline-block text-gray-900">

                    {{ $itemsPerPageText }}

                    <x-ui::dropdown openDirection="top" :titleText="$paginator->perPage()" :selectedItem="$paginator->perPage()">

                        @foreach ($pageSizes as $size)
                            <x-ui::dropdown-item value="{{ $size }}" onClick="$wire.pageSize({{ $size }})" :selected="$paginator->perPage() === $size" />
                        @endforeach

                    </x-ui::dropdown>

                </div>

                <div class="d-inline-block ps-4 pe-5">
                    {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} of {{ $paginator->total() }}
                </div>

            </div>

            <div class="col-md-6 fs-6 text-end">

                <div class="d-inline-block ps-1 pe-5">

                    <x-ui::dropdown openDirection="top" :titleText="$paginator->currentPage()" :selectedItem="$paginator->currentPage()">

                        @foreach ($pages as $page)
                            <x-ui::dropdown-item value="{{ $page }}" onClick="$wire.gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" :selected="$paginator->currentPage() === $page" />
                        @endforeach

                    </x-ui::dropdown>

                    <span>of</span>

                    <span>
                        {{ $paginator->lastPage() }} Pages
                    </span>

                </div>

                <div class="d-inline-block ps-5">

                    @if (!$paginator->onFirstPage())
                        <button type="button" class="btn btn-transparent text-gray-900 text-hover-primary fw-normal ps-2 pe-0" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled">
                            <x-ui::icon type="regular" name="arrow-left" hoverColor="primary" />
                            @if ($backwardText)
                                <span class="me-2 ms-2">{{ $backwardText }}</span>
                            @endif
                        </button>
                    @else
                        <button type="button" class="btn btn-transparent text-muted fw-normal ps-2 pe-0" disabled>
                            <x-ui::icon type="regular" name="arrow-left" hoverColor="primary" />
                            @if ($backwardText)
                                <span class="me-2 ms-2">{{ $backwardText }}</span>
                            @endif
                        </button>
                    @endif

                    @if ($paginator->hasMorePages())
                        <button type="button" class="btn btn-transparent text-gray-900 text-hover-primary fw-normal ps-2 pe-0" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled">
                            @if ($forwardText)
                                <span class="me-1 ms-2">{{ $forwardText }}</span>
                            @endif
                            <x-ui::icon type="regular" name="arrow-right" hoverColor="primary" />
                        </button>
                    @else
                        <button type="button" class="btn btn-transparent text-muted ps-2 fw-normal pe-0" disabled>
                            @if ($forwardText)
                                <span class="me-1 ms-2">{{ $forwardText }}</span>
                            @endif
                            <x-ui::icon type="regular" name="arrow-right" hoverColor="primary" />
                        </button>
                    @endif

                </div>

            </div>

        </div>

    </div>

</div>
@endif
