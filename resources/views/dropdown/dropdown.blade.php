<div {!! $classAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!} >

    <x-ui::dropdown-button color="transparent" size="md" textColor="gray-900" fontWeight="normal" fontSize="6" onClick="openItems = !openItems">
        {{ $selectedItem !== '' ? $selectedItem : $titleText }}
    </x-ui::dropdown-button>

    <x-ui::dropdown-items :openDirection="$openDirection" :selectedItem="$selectedItem">
        {{ $slot }}
    </x-ui::dropdown-items>

</div>
