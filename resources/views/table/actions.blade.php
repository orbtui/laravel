<td class="position-relative" x-init="$dispatch('uiHasTableActions')" x-data="{ open: false }" x-on:click.away="open = false" style="width: 0; min-width: fit-content">

    <button type="button" class="btn btn-transparent p-0 m-0" x-on:click="open = ! open;">
        <x-ui::icon type="solid" name="circle-ellipsis" hoverColor="primary" size="2" />
    </button>

    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg fw-semibold position-absolute overflow-hidden text-overflow-ellipsis top-0 left-0 w-250px w-lg-300px pb-3" x-show="open" :class="open ? 'show' : ''" x-transition style="margin-top: 2px; margin-left: -19px">

        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center fs-6 text-gray-900 fw-bold px-3 py-4">
                <x-ui::button type="button" color="transparent" padding="0" margin="0" x-on:click="open = ! open">
                    <x-ui::icon type="solid" name="circle-ellipsis" color="primary" size="2" marginEnd="6" />
                </x-ui::button>
                {{ $title }}
            </div>
        </div>

        <x-ui::separator marginBottom="2" />

        {{ $slot }}

    </div>

</td>
