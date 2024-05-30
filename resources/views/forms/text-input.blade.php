@if ($labelText)
    <x-ui::form-label>{{ $labelText }}</x-ui::form-label>
@endif
<x-ui::input-group>
    <input {!! $classAttributes !!} {!! $propertyAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!} />
    <span class="input-group-text border-0">
        <i class="uicons-regular uicons-calendar fs-2"><span class="path1"></i>
    </span>
</x-ui::input-group>
