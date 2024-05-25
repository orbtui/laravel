@props(['useCheckbox' => $useCheckbox])

<div class="table-responsive">
    <table {{ $attributes->class($classAttributes)->merge(['style' => $styleAttributes]) }} x-data="{ items: [],
        getItems(){
            var array = []
            var checkboxes = document.querySelectorAll('input[x-model=items]')

            for (var i = 0; i < checkboxes.length; i++) {
                array.push(checkboxes[i].value)
            }

            return array;
        }
    }" x-on:ui-table-items-deleted.camel.window="items = []">
        {{ $slot }}
    </table>
</div>
