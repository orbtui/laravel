<div {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>

    <a href="#" class="menu-link px-3 ">

        {{-- <span class="d-flex flex-center w-20px h-20px me-2 opacity-50">
            <img src="/html/metronic/docs/assets/media/framework-logos/codeigniter.png" alt="" class="w-100">
        </span> --}}

        <x-ui::table-row-dropdown-item-text>
            {{ $slot }}
        </x-ui::table-row-dropdown-item-text>

        @if ($renderIcon)
            <x-ui::table-row-dropdown-item-icon>
                <x-ui::icon :name="$renderIcon" />
            </x-ui::table-row-dropdown-item-icon>
        @endif

    </a>

</div>
