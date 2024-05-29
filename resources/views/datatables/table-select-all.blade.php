<x-ui::table-header style="width: 0; min-width: fit-content">
    <x-ui::checkbox value="" x-bind:checked="items.length > 0" x-on:change="items = $event.target.checked ? getItems() : []" x-on:change.debounce="$dispatch('uiTableItemsSelected', { items: items })" />
</x-ui::table-header>
