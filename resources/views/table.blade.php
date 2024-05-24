@props(['useCheckbox' => $useCheckbox])

<div class="table-responsive">
    <table {{ $attributes->class($classAttributes)->merge(['style' => $styleAttributes]) }}>
        {{ $slot }}
    </table>
</div>
