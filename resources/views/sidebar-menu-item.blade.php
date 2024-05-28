<div data-kt-menu-trigger="click" {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>

    <x-ui::sidebar-menu-link tagName="{{ !$slot->isEmpty() ? 'span' : 'a' }}" route="{{ $route }}" :active="$active" :navigate="$navigate">

        @if ($iconName)
            <span class="menu-icon">
                <x-ui::icon :type="$iconType" :name="$iconName" :size="$iconSize" />
            </span>
        @else
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        @endif

        <span class="menu-title">{{ $label }}</span>

        @if($slot->isNotEmpty())
            <span class="menu-arrow"></span>
        @endif

    </x-ui::sidebar-menu-link>


    @if($slot->isNotEmpty())
        <div class="menu-sub menu-sub-accordion">
            {{ $slot }}
        </div>
    @endif

</div>
