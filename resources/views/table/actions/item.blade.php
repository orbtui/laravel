<div {{ $attributes->class($classAttributes) }}>
    <x-ui::link class="menu-link align-items-center px-3" x-on:click="open = false">
        <span class="menu-title align-items-center">
            {{ $value }}
        </span>
        @if ($iconName)
            <span class="menu-badge align-items-center">
                <x-ui::icon :type="$iconType" :name="$iconName" :size="$iconSize" />
            </span>
        @endif
    </x-ui::link>
</div>
