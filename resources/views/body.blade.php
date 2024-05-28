<body id="kt_app_body" data-kt-app-layout="light-sidebar" x-data="{ openSidebar: $persist(), fixedFooter: $persist() }" x-bind:data-kt-app-sidebar-minimize="openSidebar ? 'on' : 'off'" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" x-bind:data-kt-app-footer-fixed="fixedFooter ? 'on' : 'off'" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    {{ $slot }}

    <x-ui::scripts />

</body>
