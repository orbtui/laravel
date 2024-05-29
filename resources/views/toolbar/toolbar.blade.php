<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <x-ui::toolbar-container>

        <x-ui::toolbar-heading :title="$title" :breadcrumbs="$breadcrumbs" />

        <x-ui::toolbar-actions>
            {{ $slot }}
        </x-ui::toolbar-actions>

    </x-ui::toolbar-container>
</div>
