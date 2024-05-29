<button {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>

    @if(!$hasIconOnly)
        {{ $slot }}
    @endif

    @if($renderIcon)
        <x-ui::icon kind="light" :name="$renderIcon" marginStart="1" />
    @endif

</button>
