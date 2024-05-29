<button {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>

    @if(!$hasIconOnly)
        {{ $slot }}
    @endif

    @if($renderIcon)
        <x-ui::icon type="light" name="add" marginStart="1" />
    @endif

</button>
