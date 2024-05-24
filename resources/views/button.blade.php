<button {{ $attributes->class($classAttributes)->merge(['style' => $styleAttributes]) }}>
    {{ $slot }}
</button>
