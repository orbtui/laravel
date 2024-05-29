@aware(['currentPage', 'scrollIntoViewJsSnippet'])

<div {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!} wire:key="paginator-{{ $pageName }}-page-{{ $page }}">
    <span class="menu-link cursor-pointer px-2 align-items-center justify-content-center {{ $page === $currentPage ? 'active' : '' }} px-3" x-on:click="openPageSelector = false" wire:click="gotoPage({{ $page }}, 'page')" x-on:click="{{ $scrollIntoViewJsSnippet }}">
        {{ $page }}
    </span>
</div>
