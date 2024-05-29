@props(['selectedItem' => $selectedItem])

<div {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!} >
    {{ $slot }}
</div>
