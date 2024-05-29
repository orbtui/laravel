<td style="width: 0; min-width: fit-content">
    <x-ui::checkbox :value="$value" x-model="items" x-on:change.debounce="$dispatch('uiTableItemsSelected', { items: items })" />
</td>
