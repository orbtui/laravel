<div  {!! $classAttributes !!} {!! $propertyAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>
    <x-ui::button kind="light" :onClick="$secondaryButtonClick ? $secondaryButtonClick : ($open ? '(' . $open . ' = false)' : '')" :renderIcon="$secondaryButtonIcon ? $secondaryButtonIcon : null">
        {{ $secondaryButtonText ? $secondaryButtonText : '' }}
    </x-ui::button>
    <x-ui::button :onClick="$primaryButtonClick ? $primaryButtonClick : null" :renderIcon="$primaryButtonIcon ? $primaryButtonIcon : null">
        {{ $primaryButtonText ? $primaryButtonText : '' }}
    </x-ui::button>
</div>
