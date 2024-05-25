@aware(['useCheckbox'])

<tr>

    @if($useCheckbox)
        <td style="width: 0; min-width: fit-content">
            <div class="form-check form-check-custom form-check-solid form-check-sm cursor-pointer">
                <input class="form-check-input" type="checkbox" value="{{ $useIdentifier }}" x-model="items" x-on:change.debounce="$dispatch('uiTableItemsSelected', { items: items })" />
            </div>
        </td>
    @endif

    {{ $slot }}
</tr>
