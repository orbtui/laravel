@aware(['useCheckbox'])

<thead class="bg-gray-300 border-radius">
    <tr>
    @if($useCheckbox)
        <th style="width: 0; min-width: fit-content">
            <div class="form-check form-check-custom form-check-solid form-check-sm cursor-pointer">
                <input class="form-check-input" type="checkbox" value="" />
            </div>
        </th>
    @endif
    {{ $slot }}
    </tr>
</thead>
