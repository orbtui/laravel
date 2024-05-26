@aware(['useCheckbox'])

<thead class="bg-gray-300">
    <tr>
        @if($useCheckbox)
            <x-ui::table.header style="width: 0; min-width: fit-content">
                <x-ui::checkbox value="" x-bind:checked="items.length > 0" x-on:change="items = $event.target.checked ? getItems() : []" x-on:change.debounce="$dispatch('uiTableItemsSelected', { items: items })" />
            </x-ui::table.header>
        @endif
        <x-ui::table.header x-data="{ show: false } " x-show="show" x-on:ui-has-table-actions.camel.window="show = true" />
        {{ $slot }}
    </tr>
</thead>
