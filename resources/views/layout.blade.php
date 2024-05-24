<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-bs-theme-mode="light">

	<head>

        @isset($title)
            <title>{{ config('app.name') }} - {{  $title }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endisset

		<meta charset="utf-8" />

		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />

        <link rel="canonical" href="http://index.html" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

        <x-ui::styles />

	</head>

	<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-footer-fixed="true" data-kt-app-footer-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div class="d-flex flex-column flex-root app-root bg-white" id="kt_app_root">

			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">

				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<x-ui::sidebar>
                    </x-ui::sidebar>

					{{ $slot }}

				</div>

			</div>

		</div>

        <script>var hostUrl = "assets/";</script>

		<x-ui::scripts />

	</body>

</html>