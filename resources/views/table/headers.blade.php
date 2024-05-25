@aware(['useCheckbox'])

<thead class="bg-gray-300 border-radius">
    <tr>
        @if($useCheckbox)
            <th style="width: 0; min-width: fit-content">
                <div class="form-check form-check-custom form-check-solid form-check-sm cursor-pointer">
                    <input class="form-check-input" type="checkbox" value="" x-bind:checked="items.length > 0" x-on:change="items = $event.target.checked ? getItems() : []" x-on:change.debounce="$dispatch('uiTableItemsSelected', { items: items })" />
                </div>
            </th>
        @endif
        <th x-data="{ show: false} " x-show="show" x-on:ui-has-table-actions.camel.window="show = true"></th>
        {{ $slot }}
    </tr>
</thead>
