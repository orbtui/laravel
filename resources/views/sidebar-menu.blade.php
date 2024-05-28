<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <x-ui::sidebar-menu-wrapper>
        <x-ui::sidebar-menu-scroll>
            <x-ui::sidebar-menu-items>
                {{ $slot }}
            </x-ui::sidebar-menu-items>
        </x-ui::sidebar-menu-scroll>
    </x-ui::sidebar-menu-wrapper>
</div>
