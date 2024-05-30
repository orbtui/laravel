<div {!! $classAttributes !!} {!! $propertyAttributes !!} {!! $alpineAttributes !!} {!! $livewireAttributes !!} {!! $styleAttributes !!}>
    <x-ui::modal-dialog :size="$size">
        <x-ui::modal-content>

            <x-ui::modal-header :modalHeading="$modalHeading" :modalLabel="$modalLabel" :open="$open" />

            <x-ui::modal-body>
                {{ $slot }}
            </x-ui::modal-body>

            <x-ui::modal-footer :open="$open" :primaryButtonText="$primaryButtonText" :primaryButtonIcon="$primaryButtonIcon" :primaryButtonClick="$primaryButtonClick" :secondaryButtonText="$secondaryButtonText" />

        </x-ui::modal-content>
    </x-ui::modal-dialog>
</div>
<x-ui::backdrop :showBackdrop="$open" />
