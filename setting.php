<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.8
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
 -->
<html lang="en">
    <!-- Head -->
    <head>
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8">
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        ">
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails,
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        ">
        <meta property="og:url" content="https://keenthemes.com/metronic">
        <meta property="og:site_name" content="Keenthemes | Metronic">
        <link rel="canonical" href="index.html">
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico">

        <!-- Fonts(mandatory for all pages) -->
        <link rel="stylesheet" href="../../css?family=Inter:300,400,500,600,700">        <!--// Fonts -->

                    <!-- Vendor Stylesheets(used for this page only) -->
                            <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">
                        <!--// Vendor Stylesheets -->


                    <!-- Global Stylesheets Bundle(mandatory for all pages) -->
                            <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
                            <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
                        <!--// Global Stylesheets Bundle -->

                    <!-- Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
<!-- End::Google Tag Manager -->

        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--// Head -->

    <!-- Body -->
    <body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
        <!-- Theme mode setup on page load -->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}
</script>
<!--// Theme mode setup on page load -->
                    <!-- Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End::Google Tag Manager (noscript) -->


<!-- App -->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!-- Page -->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


<!-- Header -->
<div id="kt_app_header" class="app-header ">

                        <!-- Header container -->
            <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">

	<!-- Sidebar mobile toggle -->
	<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
		<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
			<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></i>		</div>
	</div>
	<!--// Sidebar mobile toggle -->


	<!-- Mobile logo -->
	<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
		<a href="index.html" class="d-lg-none">
			<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px">
		</a>
	</div>
	<!--// Mobile logo -->

<!-- Header wrapper -->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

<!-- Menu wrapper -->
<div class="
        app-header-menu
        app-header-mobile-drawer
        align-items-stretch
    " data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
    <!-- Menu -->
    <div class="
            menu
            menu-rounded
            menu-column
            menu-lg-row
            my-5
            my-lg-0
            align-items-stretch
            fw-semibold
            px-2 px-lg-0
        " id="kt_app_header_menu" data-kt-menu="true">
        <!-- Menu item --><div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2"><!-- Menu link --><span class="menu-link"><span class="menu-title">Dashboards</span><span class="menu-arrow d-lg-none"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px"><!-- Dashboards menu -->
<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
    <!-- Row -->
    <div class="row">
        <!-- Col -->
        <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
            <!-- Row -->
            <div class="row">
                                                        <!-- Col -->
                    <div class="col-lg-6 mb-3">
                        <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="index.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-element-11 text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Default</span>
                                    <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                </span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                    </div>
                    <!--// Col -->
                                                        <!-- Col -->
                    <div class="col-lg-6 mb-3">
                        <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="dashboards/ecommerce.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-basket text-danger fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                    <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                </span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                    </div>
                    <!--// Col -->
                                                        <!-- Col -->
                    <div class="col-lg-6 mb-3">
                        <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="dashboards/projects.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-abstract-44 text-info fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                    <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                </span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                    </div>
                    <!--// Col -->
                                                        <!-- Col -->
                    <div class="col-lg-6 mb-3">
                        <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="dashboards/online-courses.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-color-swatch text-success fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                    <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                </span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                    </div>
                    <!--// Col -->
                                                        <!-- Col -->
                    <div class="col-lg-6 mb-3">
                        <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="dashboards/marketing.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-chart-simple text-dark fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                    </div>
                    <!--// Col -->
                                                        <!-- Col -->
                    <div class="col-lg-6 mb-3">
                        <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="dashboards/bidding.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-switch text-warning fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                    </div>
                    <!--// Col -->
                                                        <!-- Col -->
                    <div class="col-lg-6 mb-3">
                        <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="dashboards/pos.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-abstract-42 text-danger fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                    </div>
                    <!--// Col -->
                                                        <!-- Col -->
                    <div class="col-lg-6 mb-3">
                        <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="dashboards/call-center.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-call text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                    </div>
                    <!--// Col -->
                                                                                                                                                                                                                                    </div>
            <!--// Row -->

            <div class="separator separator-dashed mx-5 my-5"></div>

            <!-- Landing -->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                <div class="d-flex flex-column me-5">
                    <div class="fs-6 fw-bold text-gray-800">
                        Landing Page Template
                    </div>
                    <div class="fs-7 fw-semibold text-muted">
                        Onpe page landing template with pricing & others
                    </div>
                </div>

                <a href="landing.html" class="btn btn-sm btn-primary fw-bold">
                    Explore
                </a>
            </div>
            <!--// Landing -->
        </div>
        <!--// Col -->

        <!-- Col -->
        <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
            <!-- Heading -->
            <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
            <!--// Heading -->


                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/logistics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Logistics                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->

                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/website-analytics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Website Analytics                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->

                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/finance-performance.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Finance Performance                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->

                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/store-analytics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Store Analytics                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->

                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/social.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Social                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->

                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/delivery.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Delivery                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->

                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/crypto.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Crypto                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->

                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/school.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            School                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->

                <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="dashboards/podcast.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Podcast                        </span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                                    </div>
        <!--// Col -->
    </div>
    <!--// Row -->
</div>
<!--// Dashboards menu --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2"><!-- Menu link --><span class="menu-link"><span class="menu-title">Pages</span><span class="menu-arrow d-lg-none"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0"><!-- Pages menu -->
<div class="menu-active-bg px-4 px-lg-0">
    <!-- Tabs nav -->
    <div class="d-flex w-100 overflow-auto">
        <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                        <!-- Nav item -->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">
                        General                    </a>
                </li>
                <!--// Nav item -->
                                            <!-- Nav item -->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">
                        Account                    </a>
                </li>
                <!--// Nav item -->
                                            <!-- Nav item -->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">
                        Authentication                    </a>
                </li>
                <!--// Nav item -->
                                            <!-- Nav item -->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">
                        Utilities                    </a>
                </li>
                <!--// Nav item -->
                                            <!-- Nav item -->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">
                        Widgets                    </a>
                </li>
                <!--// Nav item -->
                    </ul>
    </div>
    <!--// Tabs nav -->

    <!-- Tab content -->
    <div class="tab-content py-4 py-lg-8 px-lg-7">
        <!-- Tab pane -->
        <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
            <!-- Row -->
<div class="row">
    <!-- Col -->
    <div class="col-lg-8">
        <!-- Row -->
        <div class="row">
            <!-- Col -->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!-- Menu heading -->
                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                <!--// Menu heading -->

                                    <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="pages/user-profile/overview.html" class="menu-link ">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                    <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="pages/user-profile/projects.html" class="menu-link ">
                            <span class="menu-title">Projects</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                    <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="pages/user-profile/campaigns.html" class="menu-link ">
                            <span class="menu-title">Campaigns</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                    <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="pages/user-profile/documents.html" class="menu-link ">
                            <span class="menu-title">Documents</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                    <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="pages/user-profile/followers.html" class="menu-link ">
                            <span class="menu-title">Followers</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                    <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="pages/user-profile/activity.html" class="menu-link ">
                            <span class="menu-title">Activity</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!-- Menu section -->
                <div class="mb-6">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/about.html" class="menu-link ">
                                <span class="menu-title">About</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/team.html" class="menu-link ">
                                <span class="menu-title">Our Team</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/contact.html" class="menu-link ">
                                <span class="menu-title">Contact Us</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/licenses.html" class="menu-link ">
                                <span class="menu-title">Licenses</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/sitemap.html" class="menu-link ">
                                <span class="menu-title">Sitemap</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->

                <!-- Menu section -->
                <div class="mb-0">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/careers/list.html" class="menu-link ">
                                <span class="menu-title">Careers List</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/careers/apply.html" class="menu-link ">
                                <span class="menu-title">Careers Apply</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!-- Menu section -->
                <div class="mb-6">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/faq/classic.html" class="menu-link ">
                                <span class="menu-title">FAQ Classic</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/faq/extended.html" class="menu-link ">
                                <span class="menu-title">FAQ Extended</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->

                <!-- Menu section -->
                <div class="mb-6">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/blog/home.html" class="menu-link ">
                                <span class="menu-title">Blog Home</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/blog/post.html" class="menu-link ">
                                <span class="menu-title">Blog Post</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->

                <!-- Menu section -->
                <div class="mb-0">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/pricing/column.html" class="menu-link ">
                                <span class="menu-title">Column Pricing</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/pricing/table.html" class="menu-link ">
                                <span class="menu-title">Table Pricing</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!-- Menu section -->
                <div class="mb-0">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/social/feeds.html" class="menu-link ">
                                <span class="menu-title">Feeds</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/social/activity.html" class="menu-link ">
                                <span class="menu-title">Activty</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/social/followers.html" class="menu-link ">
                                <span class="menu-title">Followers</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="pages/social/settings.html" class="menu-link ">
                                <span class="menu-title">Settings</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->
            </div>
            <!--// Col -->
        </div>
        <!--// Row -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-4">
        <img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="">
    </div>
    <!--// Col -->
</div>
<!--// Row -->
        </div>
        <!--// Tab pane -->

        <!-- Tab pane -->
        <div class="tab-pane  w-lg-600px" id="kt_app_header_menu_pages_account">
            <!-- Row -->
<div class="row">
    <!-- Col -->
    <div class="col-lg-5 mb-6 mb-lg-0">
        <!-- Row -->
        <div class="row">
            <!-- Col -->
            <div class="col-lg-6">
                                                                        <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/overview.html" class="menu-link ">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                                        <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/settings.html" class="menu-link ">
                            <span class="menu-title">Settings</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                                        <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/security.html" class="menu-link ">
                            <span class="menu-title">Security</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                                        <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/activity.html" class="menu-link ">
                            <span class="menu-title">Activity</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                                        <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/billing.html" class="menu-link ">
                            <span class="menu-title">Billing</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                                                                                            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-6">
                                                                                                                                                                            <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/statements.html" class="menu-link ">
                            <span class="menu-title">Statements</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                                        <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/referrals.html" class="menu-link ">
                            <span class="menu-title">Referrals</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                                        <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/api-keys.html" class="menu-link ">
                            <span class="menu-title">API Keys</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                                                        <!-- Menu item -->
                    <div class="menu-item p-0 m-0">
                        <!-- Menu link -->
                        <a href="account/logs.html" class="menu-link ">
                            <span class="menu-title">Logs</span>
                        </a>
                        <!--// Menu link -->
                    </div>
                    <!--// Menu item -->
                            </div>
            <!--// Col -->
        </div>
        <!--// Row -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-7">
        <img src="assets/media/stock/900x600/46.jpg" class="rounded mw-100" alt="">
    </div>
    <!--// Col -->
</div>
<!--// Row -->        </div>
        <!--// Tab pane -->

        <!-- Tab pane -->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_authentication">
            <!-- Row -->
<div class="row">
    <!-- Col -->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!-- Menu section -->
        <div class="mb-6">
            <!-- Menu heading -->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
            <!--// Menu heading -->

                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="#" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/corporate/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/corporate/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/corporate/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/corporate/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                    </div>
        <!--// Menu section -->

        <!-- Menu section -->
        <div class="mb-0">
            <!-- Menu heading -->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
            <!--// Menu heading -->

                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/overlay/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/overlay/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/overlay/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/overlay/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/overlay/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                    </div>
        <!--// Menu section -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!-- Menu section -->
        <div class="mb-6">
            <!-- Menu heading -->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
            <!--// Menu heading -->

                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/creative/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-in</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/creative/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-up</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/creative/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/creative/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/creative/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                    </div>
        <!--// Menu section -->

        <!-- Menu section -->
        <div class="mb-6">
            <!-- Menu heading -->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
            <!--// Menu heading -->

                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/fancy/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/fancy/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/fancy/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/fancy/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/layouts/fancy/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                    </div>
        <!--// Menu section -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!-- Menu section -->
        <div class="mb-0">
            <!-- Menu heading -->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
            <!--// Menu heading -->

                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/extended/multi-steps-sign-up.html" class="menu-link ">
                        <span class="menu-title">Multi-Steps Sign-Up</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/general/welcome.html" class="menu-link ">
                        <span class="menu-title">Welcome Message</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/general/verify-email.html" class="menu-link ">
                        <span class="menu-title">Verify Email</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/general/coming-soon.html" class="menu-link ">
                        <span class="menu-title">Coming Soon</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/general/password-confirmation.html" class="menu-link ">
                        <span class="menu-title">Password Confirmation</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/general/account-deactivated.html" class="menu-link ">
                        <span class="menu-title">Account Deactivation</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/general/error-404.html" class="menu-link ">
                        <span class="menu-title">Error 404</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/general/error-500.html" class="menu-link ">
                        <span class="menu-title">Error 500</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                    </div>
        <!--// Menu section -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!-- Menu section -->
        <div class="mb-0">
            <!-- Menu heading -->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
            <!--// Menu heading -->

                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/email/welcome-message.html" class="menu-link ">
                        <span class="menu-title">Welcome Message</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/email/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/email/subscription-confirmed.html" class="menu-link ">
                        <span class="menu-title">Subscription Confirmed</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/email/card-declined.html" class="menu-link ">
                        <span class="menu-title">Credit Card Declined</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/email/promo-1.html" class="menu-link ">
                        <span class="menu-title">Promo 1</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/email/promo-2.html" class="menu-link ">
                        <span class="menu-title">Promo 2</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                            <!-- Menu item -->
                <div class="menu-item p-0 m-0">
                    <!-- Menu link -->
                    <a href="authentication/email/promo-3.html" class="menu-link ">
                        <span class="menu-title">Promo 3</span>
                    </a>
                    <!--// Menu link -->
                </div>
                <!--// Menu item -->
                    </div>
        <!--// Menu section -->
    </div>
    <!--// Col -->
</div>
<!--// Row -->        </div>
        <!--// Tab pane -->

        <!-- Tab pane -->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_utilities">
            <!-- Row -->
<div class="row">
    <!-- Col -->
    <div class="col-lg-7">
        <!-- Row -->
        <div class="row">
            <!-- Col -->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!-- Menu section -->
                <div class="mb-0">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/general/invite-friends.html" class="menu-link ">
                                <span class="menu-title">Invite Friends</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/general/view-users.html" class="menu-link ">
                                <span class="menu-title">View Users</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/general/select-users.html" class="menu-link ">
                                <span class="menu-title">Select Users</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/general/upgrade-plan.html" class="menu-link ">
                                <span class="menu-title">Upgrade Plan</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/general/share-earn.html" class="menu-link ">
                                <span class="menu-title">Share & Earn</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/forms/new-target.html" class="menu-link ">
                                <span class="menu-title">New Target</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/forms/new-card.html" class="menu-link ">
                                <span class="menu-title">New Card</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/forms/new-address.html" class="menu-link ">
                                <span class="menu-title">New Address</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/forms/create-api-key.html" class="menu-link ">
                                <span class="menu-title">Create API Key</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/forms/bidding.html" class="menu-link ">
                                <span class="menu-title">Bidding</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!-- Menu section -->
                <div class="mb-6">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/wizards/create-app.html" class="menu-link ">
                                <span class="menu-title">Create App</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/wizards/create-campaign.html" class="menu-link ">
                                <span class="menu-title">Create Campaign</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/wizards/create-account.html" class="menu-link ">
                                <span class="menu-title">Create Business Acc</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/wizards/create-project.html" class="menu-link ">
                                <span class="menu-title">Create Project</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                <span class="menu-title">Top Up Wallet</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/wizards/offer-a-deal.html" class="menu-link ">
                                <span class="menu-title">Offer a Deal</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/wizards/two-factor-authentication.html" class="menu-link ">
                                <span class="menu-title">Two Factor Auth</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->

                <!-- Menu section -->
                <div class="mb-0">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/search/horizontal.html" class="menu-link ">
                                <span class="menu-title">Horizontal</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/search/vertical.html" class="menu-link ">
                                <span class="menu-title">Vertical</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/search/users.html" class="menu-link ">
                                <span class="menu-title">Users</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/search/select-location.html" class="menu-link ">
                                <span class="menu-title">Select Location</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!-- Menu section -->
                <div class="mb-0">
                    <!-- Menu heading -->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                    <!--// Menu heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/wizards/horizontal.html" class="menu-link ">
                                <span class="menu-title">Horizontal</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/wizards/vertical.html" class="menu-link ">
                                <span class="menu-title">Vertical</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/wizards/two-factor-authentication.html" class="menu-link ">
                                <span class="menu-title">Two Factor Auth</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/wizards/create-app.html" class="menu-link ">
                                <span class="menu-title">Create App</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/wizards/create-campaign.html" class="menu-link ">
                                <span class="menu-title">Create Campaign</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/wizards/create-account.html" class="menu-link ">
                                <span class="menu-title">Create Account</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/wizards/create-project.html" class="menu-link ">
                                <span class="menu-title">Create Project</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                <span class="menu-title">Top Up Wallet</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="utilities/wizards/offer-a-deal.html" class="menu-link ">
                                <span class="menu-title">Offer a Deal</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Menu section -->
            </div>
            <!--// Col -->
        </div>
        <!--// Row -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-5 pe-lg-5">
        <img src="assets/media/stock/600x600/img-84.jpg" class="rounded mw-100" alt="">
    </div>
    <!--// Col -->
</div>
<!--// Row -->        </div>
        <!--// Tab pane -->

        <!-- Tab pane -->
        <div class="tab-pane  w-lg-500px" id="kt_app_header_menu_pages_widgets">
            <!-- Row -->
<div class="row">
    <!-- Col -->
    <div class="col-lg-4 mb-6 mb-lg-0">
                    <!-- Menu item -->
            <div class="menu-item p-0 m-0">
                <!-- Menu link -->
                <a href="widgets/lists.html" class="menu-link ">
                    <span class="menu-title">Lists</span>
                </a>
                <!--// Menu link -->
            </div>
            <!--// Menu item -->
                    <!-- Menu item -->
            <div class="menu-item p-0 m-0">
                <!-- Menu link -->
                <a href="widgets/statistics.html" class="menu-link ">
                    <span class="menu-title">Statistics</span>
                </a>
                <!--// Menu link -->
            </div>
            <!--// Menu item -->
                    <!-- Menu item -->
            <div class="menu-item p-0 m-0">
                <!-- Menu link -->
                <a href="widgets/charts.html" class="menu-link ">
                    <span class="menu-title">Charts</span>
                </a>
                <!--// Menu link -->
            </div>
            <!--// Menu item -->
                    <!-- Menu item -->
            <div class="menu-item p-0 m-0">
                <!-- Menu link -->
                <a href="widgets/mixed.html" class="menu-link ">
                    <span class="menu-title">Mixed</span>
                </a>
                <!--// Menu link -->
            </div>
            <!--// Menu item -->
                    <!-- Menu item -->
            <div class="menu-item p-0 m-0">
                <!-- Menu link -->
                <a href="widgets/tables.html" class="menu-link ">
                    <span class="menu-title">Tables</span>
                </a>
                <!--// Menu link -->
            </div>
            <!--// Menu item -->
                    <!-- Menu item -->
            <div class="menu-item p-0 m-0">
                <!-- Menu link -->
                <a href="widgets/feeds.html" class="menu-link ">
                    <span class="menu-title">Feeds</span>
                </a>
                <!--// Menu link -->
            </div>
            <!--// Menu item -->
            </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-8">
        <img src="assets/media/stock/900x600/44.jpg" class="rounded mw-100" alt="">
    </div>
    <!--// Col -->
</div>
<!--// Row -->        </div>
        <!--// Tab pane -->
    </div>
    <!--// Tab content -->
</div>
<!--// Pages menu --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"><!-- Menu link --><span class="menu-link"><span class="menu-title">Apps</span><span class="menu-arrow d-lg-none"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px"><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Projects</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">My Projects</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/project.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Project</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/targets.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Targets</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/budget.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Budget</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/users.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/files.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Files</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/activity.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Activity</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-handcart fs-2"></i></span><span class="menu-title">eCommerce</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Catalog</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/products.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Products</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/categories.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Categories</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/add-product.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Product</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/edit-product.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Product</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/add-category.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Category</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/edit-category.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Category</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sales</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/sales/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Orders Listing</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/sales/details.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Order Details</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/sales/add-order.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Order</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/sales/edit-order.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Order</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customers</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/customers/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customers Listing</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/customers/details.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customers Details</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reports</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Products Viewed</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/sales.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sales</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/returns.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Returns</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/customer-orders.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Orders</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/shipping.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Shipping</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-chart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Support Center</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/overview.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tickets</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/tickets/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Ticket List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/tickets/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Ticket View</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorials</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/tutorials/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorials List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/tutorials/post.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorials Post</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/faq.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">FAQ</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/licenses.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Licenses</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Contact Us</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-shield-tick fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">User Management</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/users/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/users/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View User</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Roles</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/roles/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Roles List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/roles/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Roles</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/permissions.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Permissions</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-phone fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Contacts</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/contacts/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/contacts/add-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Contact</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/contacts/edit-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Contact</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/contacts/view-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Contact</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-basket fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">Subscriptions</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/subscriptions/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/subscriptions/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Subscription List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/subscriptions/add.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Subscription</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/subscriptions/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Subscription</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-briefcase fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Customers</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/customers/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/customers/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Listing</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/customers/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Details</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Invoice Management</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Profile</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/invoices/view/invoice-1.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 1</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/invoices/view/invoice-2.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 2</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/invoices/view/invoice-3.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 3</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/invoices/create.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Invoice</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-file-added fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">File Manager</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/file-manager/folders.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Folders</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/file-manager/files.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Files</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/file-manager/blank.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Blank Directory</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/file-manager/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Inbox</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/inbox/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Messages</span><span class="menu-badge"><span class="badge badge-light-success">3</span></span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/inbox/compose.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Compose</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/inbox/reply.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View & Reply</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">Chat</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/chat/private.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Private Chat</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/chat/group.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Group Chat</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/chat/drawer.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Drawer Chat</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/calendar.html"><span class="menu-icon"><i class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i></span><span class="menu-title">Calendar</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item  here show"><!-- Menu link --><span class="menu-link"><span class="menu-title">Layouts</span><span class="menu-arrow d-lg-none"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px"><!-- Dashboards menu -->
<div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6" data-kt-menu-dismiss="true">
    <!-- Row -->
    <div class="row">
        <!-- Col -->
        <div class="col-lg-6">
            <!-- Row -->
            <div class="row">
                <!-- Col -->
                <div class="col-lg-6 mb-3">
                    <!-- Heading -->
                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">Layouts</h4>
                    <!--// Heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="layouts/light-sidebar.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Light Sidebar</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="layouts/dark-sidebar.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Dark Sidebar</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="layouts/light-header.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Light Header</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="layouts/dark-header.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Dark Header</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Col -->

                <!-- Col -->
                <div class="col-lg-6 mb-3">
                    <!-- Heading -->
                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">Toolbars</h4>
                    <!--// Heading -->

                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="toolbars/classic.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Classic</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="toolbars/saas.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">SaaS</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="toolbars/accounting.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Accounting</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="toolbars/extended.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Extended</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            <!-- Menu item -->
                        <div class="menu-item p-0 m-0">
                            <!-- Menu link -->
                            <a href="toolbars/reports.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Reports</span>
                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                    </div>
                <!--// Col -->
            </div>
            <!--// Row -->

            <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>

            <!-- Layout Builder -->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5">
                <div class="d-flex flex-column me-5">
                    <div class="fs-6 fw-bold text-gray-800">
                        Layout Builder
                    </div>
                    <div class="fs-7 fw-semibold text-muted">
                        Customize, preview and export
                    </div>
                </div>

                <a href="layout-builder.html" class="btn btn-sm btn-primary fw-bold">
                    Try Builder
                </a>
            </div>
            <!--// Layout Builder -->
        </div>
        <!--// Col -->

        <!-- Col -->
        <div class="col-lg-6 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
            <img src="assets/media/stock/900x600/45.jpg" class="rounded mw-100" alt="">
        </div>
        <!--// Col -->
    </div>
    <!--// Row -->
</div>
<!--// Dashboards menu --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"><!-- Menu link --><span class="menu-link"><span class="menu-title">Help</span><span class="menu-arrow d-lg-none"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="#" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Components</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="#" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Documentation</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="#" target="_blank"><span class="menu-icon"><i class="ki-duotone ki-code fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">Changelog v8.1.8</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item -->    </div>
    <!--// Menu -->
</div>
<!--// Menu wrapper -->


<!-- Navbar -->
<div class="app-navbar flex-shrink-0">
    <!-- Search -->
    <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">

<!-- Search -->
<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

    <!-- Search toggle -->
    <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                            <i class="ki-duotone ki-magnifier fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span></i>                    </div>
    </div>
    <!--// Search toggle -->

    <!-- Menu -->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
        <!-- Wrapper -->
        <div data-kt-search-element="wrapper">
            <!-- Form -->
<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
    <!-- Icon -->
    <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"><span class="path1"></span><span class="path2"></span></i>    <!--// Icon -->

    <!-- Input -->
    <input type="text" class="search-input  form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input">
    <!--// Input -->

    <!-- Spinner -->
    <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
    </span>
    <!--// Spinner -->

    <!-- Reset -->
    <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i>    </span>
    <!--// Reset -->

    <!-- Toolbar -->
    <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
        <!-- Preferences toggle -->
        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
            <i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span class="path2"></span></i>        </div>
        <!--// Preferences toggle -->

        <!-- Advanced search toggle -->
        <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
            <i class="ki-duotone ki-down fs-2"></i>        </div>
        <!--// Advanced search toggle -->
    </div>
    <!--// Toolbar -->
</form>
<!--// Form -->

<!-- Separator -->
<div class="separator border-gray-200 mb-6"></div>
<!--// Separator -->
            <!-- Recently viewed -->
<div data-kt-search-element="results" class="d-none">
    <!-- Items -->
    <div class="scroll-y mh-200px mh-lg-350px">
                    <!-- Category title -->
            <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title">
                Users            </h3>
            <!--// Category title -->




                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-6.jpg" alt="">
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Karina Clark</span>
                            <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-2.jpg" alt="">
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                            <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-9.jpg" alt="">
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Ana Clark</span>
                            <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-14.jpg" alt="">
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                            <span class="fs-7 fw-semibold text-muted">Art Director</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-11.jpg" alt="">
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                            <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->
                                                <!-- Category title -->
            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                Customers            </h3>
            <!--// Category title -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="">
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="">
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                            <span class="fs-7 fw-semibold text-muted">Web Development</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="">
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                            <span class="fs-7 fw-semibold text-muted">Administration</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="">
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="">
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                            <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->

                                                <!-- Category title -->
            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                Projects            </h3>
            <!--// Category title -->


                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-notepad fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-frame fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->



                                    <!-- Item -->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!-- Symbol -->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </div>
                        <!--// Symbol -->

                        <!-- Title -->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                        </div>
                        <!--// Title -->
                    </a>
                    <!--// Item -->


                                        </div>
    <!--// Items -->
</div>
<!--// Recently viewed -->
            <!-- Recently viewed -->
<div class="mb-5" data-kt-search-element="main">
    <!-- Heading -->
    <div class="d-flex flex-stack fw-semibold mb-4">
        <!-- Label -->
        <span class="text-muted fs-6 me-2">Recently Searched:</span>
        <!--// Label -->

            </div>
    <!--// Heading -->

    <!-- Items -->
    <div class="scroll-y mh-200px mh-lg-325px">
                    <!-- Item -->
            <div class="d-flex align-items-center mb-5">
                <!-- Symbol -->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-laptop fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--// Symbol -->

                <!-- Title -->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                    <span class="fs-7 text-muted fw-semibold">#45789</span>
                </div>
                <!--// Title -->
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="d-flex align-items-center mb-5">
                <!-- Symbol -->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </span>
                </div>
                <!--// Symbol -->

                <!-- Title -->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                    <span class="fs-7 text-muted fw-semibold">#84050</span>
                </div>
                <!--// Title -->
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="d-flex align-items-center mb-5">
                <!-- Symbol -->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--// Symbol -->

                <!-- Title -->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                </div>
                <!--// Title -->
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="d-flex align-items-center mb-5">
                <!-- Symbol -->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--// Symbol -->

                <!-- Title -->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                    <span class="fs-7 text-muted fw-semibold">#67945</span>
                </div>
                <!--// Title -->
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="d-flex align-items-center mb-5">
                <!-- Symbol -->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-sms fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--// Symbol -->

                <!-- Title -->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                </div>
                <!--// Title -->
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="d-flex align-items-center mb-5">
                <!-- Symbol -->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-bank fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--// Symbol -->

                <!-- Title -->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                    <span class="fs-7 text-muted fw-semibold">#45690</span>
                </div>
                <!--// Title -->
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="d-flex align-items-center mb-5">
                <!-- Symbol -->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--// Symbol -->

                <!-- Title -->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                    <span class="fs-7 text-muted fw-semibold">#24005</span>
                </div>
                <!--// Title -->
            </div>
            <!--// Item -->
            </div>
    <!--// Items -->
</div>
<!--// Recently viewed -->
            <!-- Empty -->
<div data-kt-search-element="empty" class="text-center d-none">
    <!-- Icon -->
    <div class="pt-10 pb-10">
        <i class="ki-duotone ki-search-list fs-4x opacity-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>    </div>
    <!--// Icon -->

    <!-- Message -->
    <div class="pb-15 fw-semibold">
        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
        <div class="text-muted fs-7">Please try again with a different query</div>
    </div>
    <!--// Message -->
</div>
<!--// Empty -->        </div>
        <!--// Wrapper -->

        <!-- Preferences -->
<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
    <!-- Heading -->
    <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
    <!--// Heading -->

    <!-- Input group -->
    <div class="mb-5">
        <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query">
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="mb-5">
        <!-- Radio group -->
        <div class="nav-group nav-group-fluid">
            <!-- Option -->
            <label>
                <input type="radio" class="btn-check" name="type" value="has" checked="checked">
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    All
                </span>
            </label>
            <!--// Option -->

            <!-- Option -->
            <label>
                <input type="radio" class="btn-check" name="type" value="users">
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Users
                </span>
            </label>
            <!--// Option -->

            <!-- Option -->
            <label>
                <input type="radio" class="btn-check" name="type" value="orders">
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Orders
                </span>
            </label>
            <!--// Option -->

            <!-- Option -->
            <label>
                <input type="radio" class="btn-check" name="type" value="projects">
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Projects
                </span>
            </label>
            <!--// Option -->
        </div>
        <!--// Radio group -->
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="mb-5">
        <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="">
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="mb-5">
        <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="">
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="mb-5">
        <!-- Radio group -->
        <div class="nav-group nav-group-fluid">
            <!-- Option -->
            <label>
                <input type="radio" class="btn-check" name="attachment" value="has" checked="checked">
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    Has attachment
                </span>
            </label>
            <!--// Option -->

            <!-- Option -->
            <label>
                <input type="radio" class="btn-check" name="attachment" value="any">
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Any
                </span>
            </label>
            <!--// Option -->
        </div>
        <!--// Radio group -->
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="mb-5">
        <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
            <option value="next">Within the next</option>
            <option value="last">Within the last</option>
            <option value="between">Between</option>
            <option value="on">On</option>
        </select>
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="row mb-8">
        <!-- Col -->
        <div class="col-6">
            <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="">
        </div>
        <!--// Col -->

        <!-- Col -->
        <div class="col-6">
            <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                <option value="days">Days</option>
                <option value="weeks">Weeks</option>
                <option value="months">Months</option>
                <option value="years">Years</option>
            </select>
        </div>
        <!--// Col -->
    </div>
    <!--// Input group -->

    <!-- Actions -->
    <div class="d-flex justify-content-end">
        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>

        <a href="pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
    </div>
    <!--// Actions -->
</form>
<!--// Preferences -->
        <!-- Preferences -->
<form data-kt-search-element="preferences" class="pt-1 d-none">
    <!-- Heading -->
    <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
    <!--// Heading -->

    <!-- Input group -->
    <div class="pb-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Projects
            </span>

            <input class="form-check-input" type="checkbox" value="1" checked="checked">
        </label>
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Targets
            </span>
            <input class="form-check-input" type="checkbox" value="1" checked="checked">
        </label>
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Affiliate Programs
            </span>
            <input class="form-check-input" type="checkbox" value="1">
        </label>
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Referrals
            </span>
            <input class="form-check-input" type="checkbox" value="1" checked="checked">
        </label>
    </div>
    <!--// Input group -->

    <!-- Input group -->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Users
            </span>
            <input class="form-check-input" type="checkbox" value="1">
        </label>
    </div>
    <!--// Input group -->

    <!-- Actions -->
    <div class="d-flex justify-content-end pt-7">
        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
        <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
    </div>
    <!--// Actions -->
</form>
<!--// Preferences -->    </div>
    <!--// Menu -->
</div>
<!--// Search -->    </div>
    <!--// Search -->

    <!-- Activities -->
    <div class="app-navbar-item ms-1 ms-md-3">
        <!-- Drawer toggle -->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
            <i class="ki-duotone ki-notification-on fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>        </div>
        <!--// Drawer toggle -->
    </div>
    <!--// Activities -->

    <!-- Notifications -->
    <div class="app-navbar-item ms-1 ms-md-3">
        <!-- Menu- wrapper -->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
            <i class="ki-duotone ki-notification-status fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>        </div>

<!-- Menu -->
<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
	<!-- Heading -->
    <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
        <!-- Title -->
        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
            Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
        </h3>
        <!--// Title -->

        <!-- Tabs -->
        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
            </li>
        </ul>
        <!--// Tabs -->
    </div>
	<!--// Heading -->

    <!-- Tab content -->
    <div class="tab-content">
        <!-- Tab panel -->
        <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
            <!-- Items -->
            <div class="scroll-y mh-325px my-5 px-8">
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <!-- Symbol -->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-duotone ki-abstract-28 fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                            </div>
                            <!--// Symbol -->

                            <!-- Title -->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                <div class="text-gray-400 fs-7">Phase 1 development</div>
                            </div>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">1 hr</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <!-- Symbol -->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-danger">
                                    <i class="ki-duotone ki-information fs-2 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                </span>
                            </div>
                            <!--// Symbol -->

                            <!-- Title -->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                <div class="text-gray-400 fs-7">Confidential staff documents</div>
                            </div>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <!-- Symbol -->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                    <i class="ki-duotone ki-briefcase fs-2 text-warning"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                            </div>
                            <!--// Symbol -->

                            <!-- Title -->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                            </div>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <!-- Symbol -->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-abstract-12 fs-2 text-success"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                            </div>
                            <!--// Symbol -->

                            <!-- Title -->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                <div class="text-gray-400 fs-7">New frontend admin theme</div>
                            </div>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <!-- Symbol -->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-duotone ki-colors-square fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </span>
                            </div>
                            <!--// Symbol -->

                            <!-- Title -->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                <div class="text-gray-400 fs-7">Product launch status update</div>
                            </div>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <!-- Symbol -->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-info">
                                    <i class="ki-duotone ki-picture
 fs-2 text-info"></i>
                                </span>
                            </div>
                            <!--// Symbol -->

                            <!-- Title -->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                <div class="text-gray-400 fs-7">Collection of banner images</div>
                            </div>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <!-- Symbol -->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                    <i class="ki-duotone ki-color-swatch fs-2 text-warning"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></i>
                                </span>
                            </div>
                            <!--// Symbol -->

                            <!-- Title -->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                            </div>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">20 March</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->

            </div>
            <!--// Items -->

            <!-- View more -->
			<div class="py-3 text-center border-top">
                <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                    View All
                    <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span class="path2"></span></i>                </a>
			</div>
			<!--// View more -->
        </div>
        <!--// Tab panel -->

        <!-- Tab panel -->
        <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
            <!-- Wrapper -->
            <div class="d-flex flex-column px-9">
                <!-- Section -->
                <div class="pt-10 pb-0">
                    <!-- Title -->
                    <h3 class="text-dark text-center fw-bold">
                        Get Pro Access
                    </h3>
                    <!--// Title -->

                    <!-- Text -->
                    <div class="text-center text-gray-600 fw-semibold pt-1">
                        Outlines keep you honest. They stoping you from amazing poorly about drive
                    </div>
                    <!--// Text -->

                    <!-- Action -->
                    <div class="text-center mt-5 mb-9">
                        <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                    </div>
                    <!--// Action -->
                </div>
                <!--// Section -->

                <!-- Illustration -->
                <div class="text-center px-4">
                    <img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png">
                </div>
                <!--// Illustration -->
            </div>
            <!--// Wrapper -->
        </div>
        <!--// Tab panel -->

        <!-- Tab panel -->
        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
            <!-- Items -->
            <div class="scroll-y mh-325px my-5 px-8">
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">Just now</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">1 week</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">Mar 5</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">May 15</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">Apr 3</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">Jun 30</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">Jul 10</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">Sep 10</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="d-flex flex-stack py-4">
                        <!-- Section -->
                        <div class="d-flex align-items-center me-2">
                            <!-- Code -->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--// Code -->

                            <!-- Title -->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                            <!--// Title -->
                        </div>
                        <!--// Section -->

                        <!-- Label -->
                        <span class="badge badge-light fs-8">Dec 10</span>
                        <!--// Label -->
                    </div>
                    <!--// Item -->

            </div>
            <!--// Items -->

            <!-- View more -->
			<div class="py-3 text-center border-top">
                <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                    View All
                    <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span class="path2"></span></i>                </a>
			</div>
			<!--// View more -->
        </div>
        <!--// Tab panel -->
    </div>
    <!--// Tab content -->
</div>
<!--// Menu -->        <!--// Menu wrapper -->
    </div>
    <!--// Notifications -->

    <!-- Chat -->
    <div class="app-navbar-item ms-1 ms-md-3">
        <!-- Menu wrapper -->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
            <i class="ki-duotone ki-message-text-2 fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
        </div>
        <!--// Menu wrapper -->
    </div>
    <!--// Chat -->

    <!-- My apps links -->
    <div class="app-navbar-item ms-1 ms-md-3">
        <!-- Menu wrapper -->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-element-11 fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>        </div>

<!-- My apps -->
<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
    <!-- Card -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <!-- Card title -->
            <div class="card-title">My Apps</div>
            <!--// Card title -->

            <!-- Card toolbar -->
            <div class="card-toolbar">
                <!-- Menu -->
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-setting-3 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>

<!-- Menu 3 -->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
    <!-- Heading -->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Payments
        </div>
    </div>
    <!--// Heading -->

    <!-- Menu item -->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Create Invoice
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3">
            Create Payment

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Generate Bill
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!-- Menu sub -->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Plans
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Billing
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Statements
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu separator -->
            <div class="separator my-2"></div>
            <!--// Menu separator -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <!-- Switch -->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <!-- Input -->
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                        <!--// Input -->

                        <!--// Label -->
                        <span class="form-check-label text-muted fs-6">
                            Recuring
                        </span>
                        <!--// Label -->
                    </label>
                    <!--// Switch -->
                </div>
            </div>
            <!--// Menu item -->
        </div>
        <!--// Menu sub -->
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3 my-1">
        <a href="#" class="menu-link px-3">
            Settings
        </a>
    </div>
    <!--// Menu item -->
</div>
<!--// Menu 3 -->
                <!--// Menu -->
            </div>
            <!--// Card toolbar -->
        </div>
        <!--// Card header -->

        <!-- Card body -->
        <div class="card-body py-5">
            <!-- Scroll -->
            <div class="mh-450px scroll-y me-n5 pe-5">
                <!-- Row -->
                <div class="row g-2">
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/amazon.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">AWS</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/angular-icon-1.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">AngularJS</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/atica.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Atica</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/beats-electronics.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Music</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/codeigniter.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Codeigniter</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/bootstrap-4.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Bootstrap</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/google-tag-manager.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">GTM</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/disqus.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Disqus</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Dribble</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/google-play-store.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Play Store</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/google-podcasts.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Podcasts</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/figma-1.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Figma</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/github.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Github</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/gitlab.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Gitlab</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Instagram</span>
                            </a>
                        </div>
                        <!--// Col -->
                                            <!-- Col -->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="assets/media/svg/brand-logos/pinterest-p.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Pinterest</span>
                            </a>
                        </div>
                        <!--// Col -->
                                    </div>
                <!--// Row -->
            </div>
            <!--// Scroll -->
        </div>
        <!--// Card body -->
    </div>
    <!--// Card -->
</div>
<!--// My apps -->        <!--// Menu wrapper -->
    </div>
    <!--// My apps links -->

    <!-- Theme mode -->
    <div class="app-navbar-item ms-1 ms-md-3">

<!-- Menu toggle -->
<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>    <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span></i></a>
<!-- Menu toggle -->

<!-- Menu -->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!-- Menu item -->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>            </span>
            <span class="menu-title">
                Light
            </span>
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
            <span class="menu-title">
                Dark
            </span>
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </span>
            <span class="menu-title">
                System
            </span>
        </a>
    </div>
    <!--// Menu item -->
</div>
<!--// Menu -->

    </div>
    <!--// Theme mode -->

    <!-- User menu -->
    <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
        <!-- Menu wrapper -->
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="assets/media/avatars/300-1.jpg" alt="user">
        </div>

<!-- User account menu -->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
    <!-- Menu item -->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!-- Avatar -->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="assets/media/avatars/300-1.jpg">
            </div>
            <!--// Avatar -->

            <!-- Username -->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    Max Smith                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                </div>

                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                    max@kt.com                </a>
            </div>
            <!--// Username -->
        </div>
    </div>
    <!--// Menu item -->

    <!-- Menu separator -->
    <div class="separator my-2"></div>
    <!--// Menu separator -->

    <!-- Menu item -->
    <div class="menu-item px-5">
        <a href="account/overview.html" class="menu-link px-5">
            My Profile
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-5">
        <a href="apps/projects/list.html" class="menu-link px-5">
            <span class="menu-text">My Projects</span>
            <span class="menu-badge">
                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
            </span>
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title">My Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!-- Menu sub -->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/referrals.html" class="menu-link px-5">
                    Referrals
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/billing.html" class="menu-link px-5">
                    Billing
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/statements.html" class="menu-link px-5">
                    Payments
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">
                    Statements

                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                        <i class="ki-duotone ki-information-5 fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </span>
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu separator -->
            <div class="separator my-2"></div>
            <!--// Menu separator -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                        <span class="form-check-label text-muted fs-7">
                            Notifications
                        </span>
                    </label>
                </div>
            </div>
            <!--// Menu item -->
        </div>
        <!--// Menu sub -->
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-5">
        <a href="account/statements.html" class="menu-link px-5">
            My Statements
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu separator -->
    <div class="separator my-2"></div>
    <!--// Menu separator -->


    <!-- Menu item -->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Language

                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    English <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="">
                </span>
            </span>
        </a>

        <!-- Menu sub -->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="">
                    </span>
                    English
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="assets/media/flags/spain.svg" alt="">
                    </span>
                    Spanish
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="assets/media/flags/germany.svg" alt="">
                    </span>
                    German
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="assets/media/flags/japan.svg" alt="">
                    </span>
                    Japanese
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="assets/media/flags/france.svg" alt="">
                    </span>
                    French
                </a>
            </div>
            <!--// Menu item -->
        </div>
        <!--// Menu sub -->
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-5 my-1">
        <a href="account/settings.html" class="menu-link px-5">
            Account Settings
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-5">
        <a href="#" class="menu-link px-5">
            Sign Out
        </a>
    </div>
    <!--// Menu item -->
</div>
<!--// User account menu -->
        <!--// Menu wrapper -->
    </div>
    <!--// User menu -->

    <!-- Header menu toggle -->
            <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span class="path2"></span></i>            </div>
        </div>
        <!--// Header menu toggle -->
</div>
<!--// Navbar -->
</div>
<!--// Header wrapper -->            </div>
            <!--// Header container -->
            </div>
<!--// Header -->
        <!-- Wrapper -->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">





<!-- Sidebar -->
<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


<!-- Logo -->
<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
    <!-- Logo image -->
    <a href="index.html">
                    <img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-25px app-sidebar-logo-default">

        <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize">
    </a>
    <!--// Logo image -->

            <!-- Sidebar toggle -->
        <!-- Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate " data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">

            <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span class="path2"></span></i>        </div>
        <!--// Sidebar toggle -->
    </div>
<!--// Logo -->
<!-- sidebar menu -->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!-- Menu wrapper -->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <!-- Menu -->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">Dashboards</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="index.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Default</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/ecommerce.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">eCommerce</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/projects.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Projects</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/online-courses.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Online Courses</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/marketing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Marketing</span></a><!--// Menu link --></div><!--// Menu item --><div class="menu-inner flex-column collapse " id="kt_app_sidebar_menu_dashboards_collapse"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/bidding.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Bidding</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/pos.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">POS System</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/call-center.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Call Center</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/logistics.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Logistics</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/website-analytics.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Website Analytics</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/finance-performance.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Finance Performance</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/store-analytics.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Store Analytics</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/social.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/delivery.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Delivery</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/crypto.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Crypto</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/school.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">School</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="dashboards/podcast.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Podcast</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="landing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Landing</span></a><!--// Menu link --></div><!--// Menu item --></div>
            <div class="menu-item">
                <div class="menu-content">
                    <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
                        <span data-kt-toggle-text-target="true">Show 12 More</span> <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0"><span class="path1"></span><span class="path2"></span></i><i class="ki-duotone ki-plus-square toggle-off fs-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </a>
                </div>
            </div>
        </div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item pt-5"><!-- Menu content --><div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Pages</span></div><!--// Menu content --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-address-book fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">User Profile</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/user-profile/overview.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/user-profile/projects.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Projects</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/user-profile/campaigns.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Campaigns</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/user-profile/documents.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Documents</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/user-profile/followers.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Followers</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/user-profile/activity.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Activity</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-element-plus fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></span><span class="menu-title">Account</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/overview.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/security.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Security</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/activity.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Activity</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/billing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Billing</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/statements.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Statements</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/referrals.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Referrals</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/api-keys.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">API Keys</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="account/logs.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Logs</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-user fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Authentication</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Corporate Layout</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign-in</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/corporate/sign-up.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign-up</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/corporate/two-factor.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Two-Factor</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/corporate/reset-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/corporate/new-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">New Password</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overlay Layout</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/overlay/sign-in.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign-in</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/overlay/sign-up.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign-up</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/overlay/two-factor.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Two-Factor</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/overlay/reset-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/overlay/new-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">New Password</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Creative Layout</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/creative/sign-in.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign-in</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/creative/sign-up.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign-up</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/creative/two-factor.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Two-Factor</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/creative/reset-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/creative/new-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">New Password</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Fancy Layout</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/fancy/sign-in.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign-in</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/fancy/sign-up.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign-up</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/fancy/two-factor.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Two-Factor</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/fancy/reset-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/layouts/fancy/new-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">New Password</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Email Templates</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/email/welcome-message.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Welcome Message</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/email/reset-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/email/subscription-confirmed.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Subscription Confirmed</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/email/card-declined.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Credit Card Declined</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/email/promo-1.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Promo 1</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/email/promo-2.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Promo 2</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/email/promo-3.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Promo 3</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/extended/multi-steps-sign-up.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Multi-steps Sign-up</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/general/welcome.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Welcome Message</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/general/verify-email.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Verify Email</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/general/coming-soon.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Coming Soon</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/general/password-confirmation.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Password Confirmation</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/general/account-deactivated.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Account Deactivation</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/general/error-404.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Error 404</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="authentication/general/error-500.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Error 500</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-file fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Corporate</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/about.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">About</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/team.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Our Team</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Contact Us</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/licenses.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Licenses</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/sitemap.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sitemap</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-39 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Social</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/social/feeds.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Feeds</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/social/activity.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Activty</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/social/followers.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Followers</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/social/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-bank fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Blog</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/blog/home.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Blog Home</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/blog/post.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Blog Post</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-chart-pie-3 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">FAQ</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/faq/classic.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">FAQ Classic</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/faq/extended.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">FAQ Extended</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-bucket fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">Pricing</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/pricing/column.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Column Pricing</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/pricing/table.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Table Pricing</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-call fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></i></span><span class="menu-title">Careers</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/careers/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Careers List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="pages/careers/apply.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Careers Apply</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-color-swatch fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></i></span><span class="menu-title">Utilities</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Modals</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">General</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/general/invite-friends.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invite Friends</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/general/view-users.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Users</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/general/select-users.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Select Users</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/general/upgrade-plan.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Upgrade Plan</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/general/share-earn.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Share & Earn</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Forms</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/forms/new-target.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">New Target</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/forms/new-card.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">New Card</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/forms/new-address.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">New Address</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/forms/create-api-key.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create API Key</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/forms/bidding.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Bidding</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Wizards</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/wizards/create-app.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create App</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/wizards/create-campaign.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Campaign</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/wizards/create-account.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Business Acc</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/wizards/create-project.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Project</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/wizards/top-up-wallet.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Top Up Wallet</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/wizards/offer-a-deal.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Offer a Deal</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/wizards/two-factor-authentication.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Two Factor Auth</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Search</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/search/users.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/search/select-location.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Select Location</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Search</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/search/horizontal.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Horizontal</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/search/vertical.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Vertical</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/search/users.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/search/select-location.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Location</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Wizards</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/wizards/horizontal.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Horizontal</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/wizards/vertical.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Vertical</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/wizards/two-factor-authentication.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Two Factor Auth</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/wizards/create-app.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create App</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/wizards/create-campaign.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Campaign</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/wizards/create-account.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Account</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/wizards/create-project.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Project</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/modals/wizards/top-up-wallet.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Top Up Wallet</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="utilities/wizards/offer-a-deal.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Offer a Deal</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-element-7 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Widgets</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="widgets/lists.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Lists</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="widgets/statistics.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Statistics</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="widgets/charts.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Charts</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="widgets/mixed.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Mixed</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="widgets/tables.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tables</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="widgets/feeds.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Feeds</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item pt-5"><!-- Menu content --><div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Apps</span></div><!--// Menu content --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-41 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Projects</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">My Projects</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/project.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Project</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/targets.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Targets</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/budget.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Budget</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/users.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/files.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Files</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/activity.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Activity</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/projects/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-basket fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">eCommerce</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Catalog</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/products.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Products</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/categories.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Categories</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/add-product.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Product</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/edit-product.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Product</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/add-category.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Category</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/catalog/edit-category.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Category</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sales</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/sales/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Orders Listing</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/sales/details.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Order Details</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/sales/add-order.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Order</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/sales/edit-order.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Order</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customers</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/customers/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Listing</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/customers/details.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Details</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reports</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Products Viewed</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/sales.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sales</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/returns.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Returns</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/customer-orders.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Orders</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/reports/shipping.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Shipping</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/ecommerce/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-25 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Contacts</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/contacts/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/contacts/add-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Contact</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/contacts/edit-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Contact</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/contacts/view-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Contact</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-chart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Support Center</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/overview.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tickets</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/tickets/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tickets List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/tickets/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Ticket</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorials</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/tutorials/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorials List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/tutorials/post.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorial Post</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/faq.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">FAQ</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/licenses.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Licenses</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/support-center/contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Contact Us</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">User Management</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/users/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/users/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View User</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Roles</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/roles/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Roles List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/roles/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Role</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/user-management/permissions.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Permissions</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-38 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Customers</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/customers/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/customers/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Listing</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/customers/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Details</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-map fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">Subscription</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/subscriptions/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/subscriptions/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Subscription List</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/subscriptions/add.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Subscription</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/subscriptions/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Subscription</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Invoice Manager</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Invoices</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion menu-active-bg"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/invoices/view/invoice-1.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 1</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/invoices/view/invoice-2.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 2</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/invoices/view/invoice-3.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 3</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/invoices/create.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Invoice</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-switch fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">File Manager</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/file-manager/folders.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Folders</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/file-manager/files.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Files</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/file-manager/blank.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Blank Directory</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/file-manager/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Inbox</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/inbox/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Messages</span><span class="menu-badge"><span class="badge badge-success">3</span></span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/inbox/compose.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Compose</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/inbox/reply.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View & Reply</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">Chat</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/chat/private.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Private Chat</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/chat/group.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Group Chat</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/chat/drawer.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Drawer Chat</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="apps/calendar.html"><span class="menu-icon"><i class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i></span><span class="menu-title">Calendar</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item pt-5"><!-- Menu content --><div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span></div><!--// Menu content --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-element-7 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Layout Options</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="layouts/light-sidebar.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Light Sidebar</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="layouts/dark-sidebar.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Dark Sidebar</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="layouts/light-header.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Light Header</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="layouts/dark-header.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Dark Header</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!-- Menu link --><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-text-align-center fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">Toolbars</span><span class="menu-arrow"></span></span><!--// Menu link --><!-- Menu sub --><div class="menu-sub menu-sub-accordion"><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="toolbars/classic.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Classic</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="toolbars/saas.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">SaaS</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="toolbars/accounting.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Accounting</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="toolbars/extended.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Extended</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="toolbars/reports.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reports</span></a><!--// Menu link --></div><!--// Menu item --></div><!--// Menu sub --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link active" href="layout-builder.html"><span class="menu-icon"><i class="ki-duotone ki-abstract-13 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Layout Builder</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item pt-5"><!-- Menu content --><div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Help</span></div><!--// Menu content --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="#" target="_blank"><span class="menu-icon"><i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Components</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="#" target="_blank"><span class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">Documentation</span></a><!--// Menu link --></div><!--// Menu item --><!-- Menu item --><div class="menu-item"><!-- Menu link --><a class="menu-link" href="#" target="_blank"><span class="menu-icon"><i class="ki-duotone ki-code fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">Changelog v8.1.8</span></a><!--// Menu link --></div><!--// Menu item -->        </div>
        <!--// Menu -->
    </div>
    <!--// Menu wrapper -->
</div>
<!--// sidebar menu -->
<!-- Footer -->
<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
    <a href="#" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">

        <span class="btn-label">
            Docs & Components
        </span>

        <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span class="path2"></span></i>    </a>
</div>
<!--// Footer -->    </div>
<!--// Sidebar -->


            <!-- Main -->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!-- Content wrapper -->
                <div class="d-flex flex-column flex-column-fluid">

<!-- Toolbar -->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!-- Toolbar container -->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!-- Page title -->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!-- Title -->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
        Layout Builder
            </h1>
    <!--// Title -->

    </div>
<!--// Page title -->
<!-- Actions -->
<div class="d-flex align-items-center gap-2 gap-lg-3">
            <!-- Filter menu -->
        <div class="m-0">
            <!-- Menu toggle -->
            <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span class="path2"></span></i>
                Filter
            </a>
            <!--// Menu toggle -->



<!-- Menu 1 -->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_649c4461d0076">
    <!-- Header -->
    <div class="px-7 py-5">
        <div class="fs-5 text-dark fw-bold">Filter Options</div>
    </div>
    <!--// Header -->

    <!-- Menu separator -->
    <div class="separator border-gray-200"></div>
    <!--// Menu separator -->

    <!-- Form -->
    <div class="px-7 py-5">
        <!-- Input group -->
        <div class="mb-10">
            <!-- Label -->
            <label class="form-label fw-semibold">Status:</label>
            <!--// Label -->

            <!-- Input -->
            <div>
                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_649c4461d0076" data-allow-clear="true">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select>
            </div>
            <!--// Input -->
        </div>
        <!--// Input group -->

        <!-- Input group -->
        <div class="mb-10">
            <!-- Label -->
            <label class="form-label fw-semibold">Member Type:</label>
            <!--// Label -->

            <!-- Options -->
            <div class="d-flex">
                <!-- Options -->
                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                    <input class="form-check-input" type="checkbox" value="1">
                    <span class="form-check-label">
                        Author
                    </span>
                </label>
                <!--// Options -->

                <!-- Options -->
                <label class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                    <span class="form-check-label">
                        Customer
                    </span>
                </label>
                <!--// Options -->
            </div>
            <!--// Options -->
        </div>
        <!--// Input group -->

        <!-- Input group -->
        <div class="mb-10">
            <!-- Label -->
            <label class="form-label fw-semibold">Notifications:</label>
            <!--// Label -->

            <!-- Switch -->
            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
                <label class="form-check-label">
                    Enabled
                </label>
            </div>
            <!--// Switch -->
        </div>
        <!--// Input group -->

        <!-- Actions -->
        <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>

            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
        </div>
        <!--// Actions -->
    </div>
    <!--// Form -->
</div>
<!--// Menu 1 -->        </div>
        <!--// Filter menu -->


    <!-- Secondary button -->
        <!--// Secondary button -->

    <!-- Primary button -->
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
            Create        </a>
        <!--// Primary button -->
</div>
<!--// Actions -->
        </div>
        <!--// Toolbar container -->
    </div>
<!--// Toolbar -->

<!-- Content -->
<div id="kt_app_content" class="app-content  flex-column-fluid ">


        <!-- Content container -->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!-- Layout Builder Notice -->
<div class="card mb-10">
    <div class="card-body d-flex align-items-center p-5 p-lg-8">
        <!-- Icon -->
		<div class="d-flex h-50px w-50px h-lg-80px w-lg-80px flex-shrink-0 flex-center position-relative align-self-start align-self-lg-center mt-3 mt-lg-0">
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="text-primary h-75px w-75px h-lg-100px w-lg-100px position-absolute opacity-5">
				<path fill="currentColor" d="M10.2,21.23,4.91,18.17a3.58,3.58,0,0,1-1.8-3.11V8.94a3.58,3.58,0,0,1,1.8-3.11L10.2,2.77a3.62,3.62,0,0,1,3.6,0l5.29,3.06a3.58,3.58,0,0,1,1.8,3.11v6.12a3.58,3.58,0,0,1-1.8,3.11L13.8,21.23A3.62,3.62,0,0,1,10.2,21.23Z"></path>
			</svg>

	   		<i class="ki-duotone ki-wrench fs-2x fs-lg-3x text-primary position-absolute"><span class="path1"></span><span class="path2"></span></i>	   	</div>
        <!--// Icon -->

        <!-- Description -->
        <div class="ms-6">
            <p class="list-unstyled text-gray-600 fw-semibold fs-6 p-0 m-0">
                The layout builder is to assist your set and configure your preferred project layout specifications and preview it in real time and export the HTML template with its includable partials of this demo.
                The downloaded version does not include the assets folder since the layout builder's main purpose is to help to generate the final HTML code without hassle.
            </p>
        </div>
        <!--// Description -->
    </div>
</div>
<!--// Layout Builder Notice -->

<!-- Layout Builder Modal -->
<div class="modal fade" id="kt_layout_builder_recaptcha_modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="exampleModalLabel">reCaptcha Verification</h3>

                <button class="btn btn-sm btn-icon btn-light btn-hover-primary" data-bs-dismiss="modal" aria-label="Close">
        			<i class="ki ki-close fs-4 text-muted"></i>
        		</button>
			</div>
			<div class="modal-body">
				<form class="form">
					<div class="form-group">
						<script src="../../recaptcha/api.js"></script>
						<div class="g-recaptcha" data-sitekey="6Lf92jMUAAAAANk8wz68r73rA2uPGr4_e0gn96BL"></div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
                <button type="button" class="btn btn-primary  me-2" id="kt_layout_builder_verify">Submit</button>
				<button type="button" class="btn btn-hover-light btn-text-muted fw-semibold" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--// Layout Builder Modal -->

<!-- Card -->
<div class="card">
	<!-- Header -->
	<div class="card-header card-header-stretch overflow-auto">
		<!-- Tabs -->
		<ul class="nav nav-stretch nav-line-tabs fw-semibold fs-6 border-transparent flex-nowrap" role="tablist" id="kt_layout_builder_tabs">

				<li class="nav-item">
					<a class="nav-link active" data-bs-toggle="tab" href="#kt_layout_builder_main" role="tab">
						Main					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link " data-bs-toggle="tab" href="#kt_layout_builder_layouts" role="tab">
						Layouts					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link " data-bs-toggle="tab" href="#kt_layout_builder_sidebar" role="tab">
						Sidebar					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link " data-bs-toggle="tab" href="#kt_layout_builder_header" role="tab">
						Header					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link " data-bs-toggle="tab" href="#kt_layout_builder_toolbar" role="tab">
						Toolbar					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link " data-bs-toggle="tab" href="#kt_layout_builder_footer" role="tab">
						Footer					</a>
				</li>
					</ul>
		<!--// Tabs -->
	</div>
	<!--// Header -->

	<!-- Form -->
	<form class="form" method="POST" id="kt_layout_builder_form" action="/metronic8/demo1/index.php">
		<!-- Body -->
		<div class="card-body">
			<div class="tab-content pt-3">

					<!-- Tab pane -->
					<div class="tab-pane active" id="kt_layout_builder_main">

<!-- Form group -->
<div class="form-group">
	<!-- Heading -->
	<div class="mb-6">
		<h4 class="fw-bold text-dark">Theme Mode</h4>
		<div class="fw-semibold text-muted fs-7 d-block lh-1">
			Enjoy Dark & Light modes.

			<a class="fw-semibold" href="#/getting-started/dark-mode" target="_blank">See docs</a>
		</div>
	</div>
	<!--// Heading -->

	<!-- Options -->
	<div class="row mw-lg-600px" data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">
					<!-- Col -->
			<div class="col-6">
				<!-- Option -->
				<label class="form-check-image form-check-success">
					<!-- Image -->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="assets/media/preview/demos/demo1/light-ltr.png" class="form-check-rounded mw-100" alt="">
					</div>
					<!--// Image -->

					<!-- Check -->
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="light" name="theme_mode" id="kt_layout_builder_theme_mode_light">

						<!-- Label -->
						<div class="form-check-label text-gray-700">
							Light						</div>
						<!--// Label -->
					</div>
					<!--// Check -->
				</label>
				<!--// Option -->
			</div>
			<!--// Col -->
					<!-- Col -->
			<div class="col-6">
				<!-- Option -->
				<label class="form-check-image form-check-success">
					<!-- Image -->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="assets/media/preview/demos/demo1/dark-ltr.png" class="form-check-rounded mw-100" alt="">
					</div>
					<!--// Image -->

					<!-- Check -->
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="dark" name="theme_mode" id="kt_layout_builder_theme_mode_dark">

						<!-- Label -->
						<div class="form-check-label text-gray-700">
							Dark						</div>
						<!--// Label -->
					</div>
					<!--// Check -->
				</label>
				<!--// Option -->
			</div>
			<!--// Col -->

	</div>
	<!--// Options -->
</div>
<!--// Form group -->
<div class="separator separator-dashed my-6"></div>

<!-- Form group -->
<div class="form-group d-flex flex-stack">
	<!-- Heading -->
	<div class="d-flex flex-column">
		<h4 class="fw-bold text-dark">RTL Mode</h4>
		<div class="fs-7 fw-semibold text-muted">
			Change Language Direction.

			<a class="fw-semibold" href="#/getting-started/rtl" target="_blank">See docs</a>
		</div>
	</div>
	<!--// Heading -->

	<!-- Option -->
	<div class="d-flex justify-content-end">
		<!-- Check -->
		<div class="form-check form-check-custom form-check-solid form-check-success form-switch">
			<input type="hidden" value="false" name="layout-builder[layout][app][general][rtl]">

			<input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][general][rtl]">
		</div>
		<!--// Check -->
	</div>
	<!--// Option -->
</div>
<!--// Form group -->
	<div class="separator separator-dashed my-6"></div>


<!-- Form group -->
<div class="form-group d-flex flex-stack">
	<!-- Heading -->
	<div class="d-flex flex-column ">
		<h4 class="fw-bold text-dark">Width Mode</h4>
		<div class="fs-7 fw-semibold text-muted">Page width options</div>
	</div>
	<!--// Heading -->

	<!-- Options -->
	<div class="d-flex gap-7">
								<!-- Check -->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
				<input class="form-check-input" type="radio" checked="" value="default" id="kt_layout_builder_page_width_default" name="layout-builder[layout][app][general][page-width]">

				<!-- Label -->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_default">
					Default				</label>
				<!--// Label -->
			</div>
			<!--// Check -->
								<!-- Check -->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
				<input class="form-check-input" type="radio" value="fluid" id="kt_layout_builder_page_width_fluid" name="layout-builder[layout][app][general][page-width]">

				<!-- Label -->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fluid">
					Fluid				</label>
				<!--// Label -->
			</div>
			<!--// Check -->
								<!-- Check -->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
				<input class="form-check-input" type="radio" value="fixed" id="kt_layout_builder_page_width_fixed" name="layout-builder[layout][app][general][page-width]">

				<!-- Label -->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fixed">
					Fixed				</label>
				<!--// Label -->
			</div>
			<!--// Check -->
			</div>
	<!--// Options -->
</div>
<!--// Form group -->
<div class="separator separator-dashed my-6"></div>


<!-- Form group -->
<div class="form-group d-flex flex-stack">
	<!-- Heading -->
	<div class="d-flex flex-column ">
		<h4 class="fw-bold text-dark">KeenIcons Style</h4>

		<div>
			<span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
			<a class="fw-semibold" href="#/icons/keenicons" target="_blank">Learn more</a>
		</div>
	</div>
	<!--// Heading -->

	<!-- Options -->
	<div class="d-flex flex-stack gap-3 mw-lg-600px" data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">

			<!-- Option -->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover active">
				<!-- Image -->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span class="path1"></span><span class="path2"></span></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
				</div>
				<!--// Image -->

				<!-- Check -->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input class="form-check-input" type="radio" value="duotone" checked="" name="layout-builder[layout][app][general][icons]">
				</div>
				<!--// Check -->
			</label>
			<!--// Option -->

			<!-- Option -->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover ">
				<!-- Image -->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
				</div>
				<!--// Image -->

				<!-- Check -->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input class="form-check-input" type="radio" value="outline" name="layout-builder[layout][app][general][icons]">
				</div>
				<!--// Check -->
			</label>
			<!--// Option -->

			<!-- Option -->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover ">
				<!-- Image -->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
				</div>
				<!--// Image -->

				<!-- Check -->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input class="form-check-input" type="radio" value="solid" name="layout-builder[layout][app][general][icons]">
				</div>
				<!--// Check -->
			</label>
			<!--// Option -->

	</div>
	<!--// Options -->
</div>
<!--// Form group -->
<div class="separator separator-dashed my-6"></div>

<!-- Form group -->
<div class="form-group d-flex flex-stack">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Page Loader</h4>
        <div class="fs-7 fw-semibold text-muted">Display page loading indicator</div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex justify-content-end gap-7">
                                <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                <input class="form-check-input" type="radio" checked="" value="none" id="kt_builder_page_loader_type_none" name="layout-builder[layout][app][page-loader][type]">

                <!-- Label -->
                <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_loader_type_none">
                    None                </label>
                <!--// Label -->
            </div>
            <!--// Check -->
                                <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                <input class="form-check-input" type="radio" value="default" id="kt_builder_page_loader_type_default" name="layout-builder[layout][app][page-loader][type]">

                <!-- Label -->
                <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_loader_type_default">
                    Default                </label>
                <!--// Label -->
            </div>
            <!--// Check -->
                                <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                <input class="form-check-input" type="radio" value="spinner-message" id="kt_builder_page_loader_type_spinner-message" name="layout-builder[layout][app][page-loader][type]">

                <!-- Label -->
                <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_loader_type_spinner-message">
                    Message                </label>
                <!--// Label -->
            </div>
            <!--// Check -->
                                <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                <input class="form-check-input" type="radio" value="spinner-logo" id="kt_builder_page_loader_type_spinner-logo" name="layout-builder[layout][app][page-loader][type]">

                <!-- Label -->
                <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_loader_type_spinner-logo">
                    Logo                </label>
                <!--// Label -->
            </div>
            <!--// Check -->
            </div>
    <!--// Option -->
</div>
<!--// Form group -->					</div>
					<!--// Tab pane -->

					<!-- Tab pane -->
					<div class="tab-pane " id="kt_layout_builder_layouts">
						<!-- Heading -->
<div class="mb-6">
    <h4 class="fw-bold text-dark">Layouts</h4>
    <span class="fw-semibold text-muted fs-7 lh-1">
        4 main layout options.
    </span>
</div>
<!--// Heading -->

<!-- Options -->
<div class="row gy-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
                    <!-- Col -->
        <div class="col-lg-3">
            <!-- Option -->
            <label class="form-check-image form-check-success active  ">
                <!-- Image -->
                <div class="form-check-wrapper border-gray-200 border-2">
                    <img src="assets/media/misc/layout/dark-sidebar.png" class="form-check-rounded mw-100" alt="">
                </div>
                <!--// Image -->

                <!-- Check -->
                <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                    <input class="form-check-input" type="radio" checked="" value="dark-sidebar" name="layout-builder[layout][app][general][layout]">

                    <!-- Label -->
                    <div class="form-check-label text-gray-800">
                        Dark Sidebar                    </div>
                    <!--// Label -->
                </div>
                <!--// Check -->
            </label>
            <!--// Option -->
        </div>
        <!--// Col -->
                    <!-- Col -->
        <div class="col-lg-3">
            <!-- Option -->
            <label class="form-check-image form-check-success   ">
                <!-- Image -->
                <div class="form-check-wrapper border-gray-200 border-2">
                    <img src="assets/media/misc/layout/light-sidebar.png" class="form-check-rounded mw-100" alt="">
                </div>
                <!--// Image -->

                <!-- Check -->
                <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                    <input class="form-check-input" type="radio" value="light-sidebar" name="layout-builder[layout][app][general][layout]">

                    <!-- Label -->
                    <div class="form-check-label text-gray-800">
                        Light Sidebar                    </div>
                    <!--// Label -->
                </div>
                <!--// Check -->
            </label>
            <!--// Option -->
        </div>
        <!--// Col -->
                    <!-- Col -->
        <div class="col-lg-3">
            <!-- Option -->
            <label class="form-check-image form-check-success   ">
                <!-- Image -->
                <div class="form-check-wrapper border-gray-200 border-2">
                    <img src="assets/media/misc/layout/dark-header.png" class="form-check-rounded mw-100" alt="">
                </div>
                <!--// Image -->

                <!-- Check -->
                <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                    <input class="form-check-input" type="radio" value="dark-header" name="layout-builder[layout][app][general][layout]">

                    <!-- Label -->
                    <div class="form-check-label text-gray-800">
                        Dark Header                    </div>
                    <!--// Label -->
                </div>
                <!--// Check -->
            </label>
            <!--// Option -->
        </div>
        <!--// Col -->
                    <!-- Col -->
        <div class="col-lg-3">
            <!-- Option -->
            <label class="form-check-image form-check-success   ">
                <!-- Image -->
                <div class="form-check-wrapper border-gray-200 border-2">
                    <img src="assets/media/misc/layout/light-header.png" class="form-check-rounded mw-100" alt="">
                </div>
                <!--// Image -->

                <!-- Check -->
                <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                    <input class="form-check-input" type="radio" value="light-header" name="layout-builder[layout][app][general][layout]">

                    <!-- Label -->
                    <div class="form-check-label text-gray-800">
                        Light Header                    </div>
                    <!--// Label -->
                </div>
                <!--// Check -->
            </label>
            <!--// Option -->
        </div>
        <!--// Col -->
    </div>
<!--// Options --> 					</div>
					<!--// Tab pane -->

					<!-- Tab pane -->
					<div class="tab-pane " id="kt_layout_builder_sidebar">

<!-- Form group -->
<div class="form-group d-flex flex-stack d-none">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Fixed</h4>
        <div class="fs-7 fw-semibold text-muted">
            Fixed sidebar mode
        </div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex justify-content-end">
        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][fixed][desktop]">
            <input class="form-check-input w-45px h-30px" type="checkbox" checked="" value="true" name="layout-builder[layout][app][sidebar][default][fixed][desktop]" id="kt_builder_sidebar_fixed_desktop">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_fixed_desktop"></label>
            <!--// Label -->
        </div>
        <!--// Check -->
    </div>
    <!--// Option -->
</div>
<!--// Form group -->

<!-- Separator -->
<div class="separator separator-dashed my-6 d-none"></div>
<!--// Separator -->

<!-- Form group -->
<div class="form-group d-flex flex-stack">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Minimize</h4>
        <div class="fs-7 fw-semibold text-muted">
            Sidebar minimize mode
        </div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex align-items-center justify-content-end">
        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][minimize][desktop][enabled]">
            <input class="form-check-input w-45px h-30px" type="checkbox" checked="" value="true" name="layout-builder[layout][app][sidebar][default][minimize][desktop][enabled]" id="kt_builder_sidebar_minimize_desktop_enabled">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_minimize_desktop_enabled" data-bs-toggle="tooltip" title="Enable Sidebar minimize toggle">
                Minimize Toggle
            </label>
            <!--// Label -->
        </div>
        <!--// Check -->

        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch ms-10">
            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][minimize][desktop][hoverable]">
            <input class="form-check-input w-45px h-30px" type="checkbox" checked="" value="true" name="layout-builder[layout][app][sidebar][default][minimize][desktop][hoverable]" id="kt_builder_sidebar_minimize_desktop_hoverable">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_minimize_desktop_hoverable" data-bs-toggle="tooltip" title="Expand minimized sidebar on hover">
                Hoverable
            </label>
            <!--// Label -->
        </div>
        <!--// Check -->

        <!-- Check info -->

<span class="ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Add &lt;code&gt;data-kt-app-sidebar-hoverable=&#039;on&#039;&lt;/code&gt; attribute to the body element to enable the hoverable sidebar menu.">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        <!--// Check info -->

        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch ms-10">
            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][minimize][desktop][default]">
            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][sidebar][default][minimize][desktop][default]" id="kt_builder_sidebar_minimize_desktop_default">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_minimize_desktop_default" data-bs-toggle="tooltip" title="Set Sidebar minimized by default">
                Default Minimized
            </label>
            <!--// Label -->
        </div>
        <!--// Check -->

        <!-- Check info -->

<span class="ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="
                &lt;ul class=&quot;px-5 py-0 m-0&quot;&gt;
                    &lt;li class=&quot;py-2&quot;&gt;Add &lt;code&gt;data-kt-app-sidebar-minimize=&quot;on&quot;&lt;/code&gt; attribute on the body element.&lt;/li&gt;
                    &lt;li class=&quot;py-2&quot;&gt;Add &lt;code&gt;active&lt;/code&gt; class on the toggle element.&lt;/li&gt;
                    &lt;li class=&quot;py-2&quot;&gt;Set &lt;code&gt;data-kt-toggle-state=&quot;active&quot;&lt;/code&gt; attribute on the toggle element.&lt;/li&gt;
                &lt;/ul&gt;
            ">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
        <!--// Check info -->
    </div>
    <!--// Option -->
</div>
<!--// Form group -->					</div>
					<!--// Tab pane -->

					<!-- Tab pane -->
					<div class="tab-pane " id="kt_layout_builder_header">

<!-- Form group -->
<div class="form-group d-flex flex-stack">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Fixed</h4>
        <div class="fs-7 fw-semibold text-muted">
            Fixed header mode
        </div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex justify-content-end">
        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch me-10">
            <input type="hidden" value="false" name="layout-builder[layout][app][header][default][fixed][desktop]">
            <input class="form-check-input w-45px h-30px" type="checkbox" checked="" value="true" name="layout-builder[layout][app][header][default][fixed][desktop]" id="kt_builder_header_fixed_desktop">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_header_fixed_desktop">Desktop Mode</label>
            <!--// Label -->
        </div>
        <!--// Check -->

        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][header][default][fixed][mobile]">
            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][header][default][fixed][mobile]" id="kt_builder_header_fixed_mobile">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_header_fixed_mobile">Mobile Mode</label>
            <!--// Label -->
        </div>
        <!--// Check -->
    </div>
    <!--// Option -->
</div>
<!--// Form group -->

<!-- Separator -->
<div class="separator separator-dashed my-6"></div>
<!--// Separator -->

<!-- Form group -->
<div class="form-group d-flex flex-stack">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Content</h4>
        <div class="fs-7 fw-semibold text-muted">
            Header content type
        </div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex justify-content-end">
                                <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm ms-10">
                <input class="form-check-input" type="radio" checked="" value="menu" id="kt_builder_header_content_menu" name="layout-builder[layout][app][header][default][content]">

                <!-- Label -->
                <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_header_content_menu">
                    Menu                </label>
                <!--// Label -->
            </div>
            <!--// Check -->
                                <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm ms-10">
                <input class="form-check-input" type="radio" value="page-title" id="kt_builder_header_content_page-title" name="layout-builder[layout][app][header][default][content]">

                <!-- Label -->
                <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_header_content_page-title">
                    Page Title                </label>
                <!--// Label -->
            </div>
            <!--// Check -->
            </div>
    <!--// Option -->
</div>
<!--// Form group -->

<!-- Separator -->
<div class="separator separator-dashed my-6"></div>
<!--// Separator -->

<!-- Form group -->
<div class="form-group d-flex flex-stack">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Page Title</h4>
        <div class="fs-7 fw-semibold text-muted">
            Page title layout options
        </div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex justify-content-end">
        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-check-sm me-10">
            <input class="form-check-input" type="radio" checked="" value="column" name="layout-builder[layout][app][page-title][direction]" id="kt_builder_page_title_direction_column">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_page_title_direction_column" data-bs-toggle="tooltip" title="Page title, description and breadcrumbs are stacked">Column</label>
            <!--// Label -->
        </div>
        <!--// Check -->

        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success">
            <input class="form-check-input" type="radio" value="row" name="layout-builder[layout][app][page-title][direction]" id="kt_builder_page_title_direction_row">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_page_title_direction_row" data-bs-toggle="tooltip" title="Page title, description and breadcrumbs are laid out&nbsp;in&nbsp;a&nbsp;line">Row</label>
            <!--// Label -->
        </div>
        <!--// Check -->
    </div>
    <!--// Option -->
</div>
<!--// Form group -->					</div>
					<!--// Tab pane -->

					<!-- Tab pane -->
					<div class="tab-pane " id="kt_layout_builder_toolbar">
						<!-- Form group -->
<div class="form-group d-flex flex-stack">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Display</h4>
        <div class="fs-7 fw-semibold text-muted">
            Enable or disable Toolbar
        </div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex justify-content-end">
        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][toolbar][display]">
            <input class="form-check-input w-45px h-30px" type="checkbox" checked="" value="true" name="layout-builder[layout][app][toolbar][display]" id="kt_builder_toolbar_display">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_toolbar_display"></label>
            <!--// Label -->
        </div>
        <!--// Check -->
    </div>
    <!--// Option -->
</div>
<!--// Form group -->

<!-- Separator -->
<div class="separator separator-dashed my-6"></div>
<!--// Separator -->

<!-- Form group -->
<div class="form-group d-flex flex-stack">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Fixed</h4>
        <div class="fs-7 fw-semibold text-muted">
            Fixed toolbar mode
        </div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex justify-content-end">
        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch me-10">
            <input type="hidden" value="false" name="layout-builder[layout][app][toolbar][fixed][desktop]">
            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][toolbar][fixed][desktop]" id="kt_builder_toolbar_fixed_desktop">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_toolbar_fixed_desktop">Desktop Mode</label>
            <!--// Label -->
        </div>
        <!--// Check -->

        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][toolbar][fixed][mobile]">
            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][toolbar][fixed][mobile]" id="kt_builder_toolbar_fixed_mobile">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_toolbar_fixed_mobile">Mobile Mode</label>
            <!--// Label -->
        </div>
        <!--// Check -->
    </div>
    <!--// Option -->
</div>
<!--// Form group -->

<!-- Separator -->
<div class="separator separator-dashed my-6"></div>
<!--// Separator -->

<!-- Heading -->
<div class="mb-6">
    <h4 class="fw-bold text-dark">Layout</h4>
    <div class="fw-semibold text-muted fs-7 d-block lh-1">
        Select a toolbar layout
    </div>
</div>
<!--// Heading -->

<!-- Layout -->
<div data-kt-buttons="true" data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">

        <!-- Option -->
        <label class="form-check-image form-check-success active mb-10">
            <!-- Image -->
            <div class="form-check-wrapper border-gray-200 border-2">
                <img src="assets/media/misc/layout/toolbar-classic.png" class="form-check-rounded mw-100" alt="">
            </div>
            <!--// Image -->

            <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                <input class="form-check-input" type="radio" checked="" value="classic" name="layout-builder[layout][app][toolbar][layout]">

                <!-- Label -->
                <div class="form-check-label text-gray-800">
                    Classic                </div>
                <!--// Label -->
            </div>
            <!--// Check -->
        </label>
        <!--// Option -->

        <!-- Option -->
        <label class="form-check-image form-check-success  mb-10">
            <!-- Image -->
            <div class="form-check-wrapper border-gray-200 border-2">
                <img src="assets/media/misc/layout/toolbar-saas.png" class="form-check-rounded mw-100" alt="">
            </div>
            <!--// Image -->

            <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                <input class="form-check-input" type="radio" value="saas" name="layout-builder[layout][app][toolbar][layout]">

                <!-- Label -->
                <div class="form-check-label text-gray-800">
                    SaaS                </div>
                <!--// Label -->
            </div>
            <!--// Check -->
        </label>
        <!--// Option -->

        <!-- Option -->
        <label class="form-check-image form-check-success  mb-10">
            <!-- Image -->
            <div class="form-check-wrapper border-gray-200 border-2">
                <img src="assets/media/misc/layout/toolbar-accounting.png" class="form-check-rounded mw-100" alt="">
            </div>
            <!--// Image -->

            <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                <input class="form-check-input" type="radio" value="accounting" name="layout-builder[layout][app][toolbar][layout]">

                <!-- Label -->
                <div class="form-check-label text-gray-800">
                    Accounting                </div>
                <!--// Label -->
            </div>
            <!--// Check -->
        </label>
        <!--// Option -->

        <!-- Option -->
        <label class="form-check-image form-check-success  mb-10">
            <!-- Image -->
            <div class="form-check-wrapper border-gray-200 border-2">
                <img src="assets/media/misc/layout/toolbar-extended.png" class="form-check-rounded mw-100" alt="">
            </div>
            <!--// Image -->

            <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                <input class="form-check-input" type="radio" value="extended" name="layout-builder[layout][app][toolbar][layout]">

                <!-- Label -->
                <div class="form-check-label text-gray-800">
                    Extended                </div>
                <!--// Label -->
            </div>
            <!--// Check -->
        </label>
        <!--// Option -->

        <!-- Option -->
        <label class="form-check-image form-check-success  mb-10">
            <!-- Image -->
            <div class="form-check-wrapper border-gray-200 border-2">
                <img src="assets/media/misc/layout/toolbar-reports.png" class="form-check-rounded mw-100" alt="">
            </div>
            <!--// Image -->

            <!-- Check -->
            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                <input class="form-check-input" type="radio" value="reports" name="layout-builder[layout][app][toolbar][layout]">

                <!-- Label -->
                <div class="form-check-label text-gray-800">
                    Reports                </div>
                <!--// Label -->
            </div>
            <!--// Check -->
        </label>
        <!--// Option -->
    </div>
<!--// Layout --> 					</div>
					<!--// Tab pane -->

					<!-- Tab pane -->
					<div class="tab-pane " id="kt_layout_builder_footer">

<!-- Form group -->
<div class="form-group d-flex flex-stack">
    <!-- Heading -->
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-dark">Fixed</h4>
        <div class="fs-7 fw-semibold text-muted">
            Fixed footer mode
        </div>
    </div>
    <!--// Heading -->

    <!-- Option -->
    <div class="d-flex align-items-center justify-content-end">
        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch ms-10">
            <input type="hidden" value="false" name="layout-builder[layout][app][footer][default][fixed][desktop]">
            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][footer][fixed][desktop]" id="kt_builder_footer_fixed_desktop">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_footer_fixed_desktop">Desktop Mode</label>
            <!--// Label -->
        </div>
        <!--// Check -->

        <!-- Check info -->

<span class="ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Add &lt;code&gt;data-kt-app-footer-fixed=&quot;on&quot;&lt;/code&gt; attribute to the body element to enable the fixed footer mode for desktop">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        <!--// Check info -->

        <!-- Check -->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch ms-10">
            <input type="hidden" value="false" name="layout-builder[layout][app][footer][fixed][mobile]">
            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][footer][fixed][mobile]" id="kt_builder_footer_fixed_mobile">

            <!-- Label -->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_footer_fixed_mobile">Mobile Mode</label>
            <!--// Label -->
        </div>
        <!--// Check -->

        <!-- Check info -->

<span class="ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Add &lt;code&gt;data-kt-app-footer-fixed-mobile=&quot;on&quot;&lt;/code&gt; attribute to the body element to enable the fixed footer mode for mobile">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        <!--// Check info -->
    </div>
    <!--// Option -->
</div>
<!--// Form group -->					</div>
					<!--// Tab pane -->
							</div>
		</div>
		<!--// Body -->

		<!-- Footer -->
		<div class="card-footer d-flex py-8">
			<input type="hidden" id="kt_layout_builder_tab" name="layout-builder[tab]" value="">
			<input type="hidden" id="kt_layout_builder_action" name="layout-builder[action]">

			<button type="button" id="kt_layout_builder_preview" class="btn btn-primary me-2">
				<span class="indicator-label">
					Preview
				</span>
				<span class="indicator-progress">
					Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
				</span>
			</button>


			<button type="button" id="kt_layout_builder_export" class="btn btn-light me-2">
				<span class="indicator-label">
					Export
				</span>
				<span class="indicator-progress">
					Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
				</span>
			</button>

			<button type="button" id="kt_layout_builder_reset" class="btn btn-active-light btn-color-muted">
				<span class="indicator-label">
					Reset
				</span>
				<span class="indicator-progress">
					Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
				</span>
			</button>
		</div>
		<!--// Footer -->
	</form>
	<!--// Form -->
</div>
<!--// Card -->        </div>
        <!--// Content container -->
    </div>
<!--// Content -->
                </div>
                <!--// Content wrapper -->


<!-- Footer -->
<div id="kt_app_footer" class="app-footer ">
            <!-- Footer container -->
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <!-- Copyright -->
<div class="text-dark order-2 order-md-1">
    <span class="text-muted fw-semibold me-1">2023&copy;</span>
    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
</div>
<!--// Copyright -->

<!-- Menu -->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
    <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

    <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

    <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
</ul>
<!--// Menu -->        </div>
        <!--// Footer container -->
    </div>
<!--// Footer -->                            </div>
            <!--// Main -->


                    </div>
        <!--// Wrapper -->


            </div>
    <!--// Page -->
</div>
<!--// App -->


<!-- Drawers -->
<!-- Activities drawer -->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">

	<div class="card shadow-none border-0 rounded-0">
		<!-- Header -->
		<div class="card-header" id="kt_activities_header">
			<h3 class="card-title fw-bold text-dark">Activity Logs</h3>

			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
					<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>				</button>
			</div>
		</div>
		<!--// Header -->

		<!-- Body -->
		<div class="card-body position-relative" id="kt_activities_body">
			<!-- Content -->
			<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">

				<!-- Timeline items -->
				<div class="timeline">
					<!-- Timeline item -->
<div class="timeline-item">
    <!-- Timeline line -->
    <div class="timeline-line w-40px"></div>
    <!--// Timeline line -->

    <!-- Timeline icon -->
    <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        </div>
    </div>
    <!--// Timeline icon -->

    <!-- Timeline content -->
    <div class="timeline-content mb-10 mt-n1">
        <!-- Timeline heading -->
        <div class="pe-3 mb-5">
            <!-- Title -->
            <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
            <!--// Title -->

            <!-- Description -->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!-- Info -->
                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                <!--// Info -->

                <!-- User -->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="assets/media/avatars/300-14.jpg" alt="img">
                </div>
                <!--// User -->
            </div>
            <!--// Description -->
        </div>
        <!--// Timeline heading -->

        <!-- Timeline details -->
        <div class="overflow-auto pb-5">
            <!-- Record -->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                <!-- Title -->
                <a href="apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                <!--// Title -->

                <!-- Label -->
                <div class="min-w-175px pe-2">
                    <span class="badge badge-light text-muted">Application Design</span>
                </div>
                <!--// Label -->

                <!-- Users -->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                    <!-- User -->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-2.jpg" alt="img">
                    </div>
                    <!--// User -->

                    <!-- User -->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-14.jpg" alt="img">
                    </div>
                    <!--// User -->

                    <!-- User -->
                    <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                    </div>
                    <!--// User -->
                </div>
                <!--// Users -->

                <!-- Progress -->
                <div class="min-w-125px pe-2">
                    <span class="badge badge-light-primary">In Progress</span>
                </div>
                <!--// Progress -->

                <!-- Action -->
                <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                <!--// Action -->
            </div>
            <!--// Record -->

            <!-- Record -->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                <!-- Title -->
                <a href="apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                <!--// Title -->

                <!-- Label -->
                <div class="min-w-175px">
                    <span class="badge badge-light text-muted">CRM System Development</span>
                </div>
                <!--// Label -->

                <!-- Users -->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                    <!-- User -->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-20.jpg" alt="img">
                    </div>
                    <!--// User -->

                    <!-- User -->
                    <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                    </div>
                    <!--// User -->
                </div>
                <!--// Users -->

                <!-- Progress -->
                <div class="min-w-125px">
                    <span class="badge badge-light-success">Completed</span>
                </div>
                <!--// Progress -->

                <!-- Action -->
                <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                <!--// Action -->
            </div>
            <!--// Record -->
        </div>
        <!--// Timeline details -->
    </div>
    <!--// Timeline content -->
</div>
<!--// Timeline item -->
					<!-- Timeline item -->
<div class="timeline-item">
    <!-- Timeline line -->
    <div class="timeline-line w-40px"></div>
    <!--// Timeline line -->

    <!-- Timeline icon -->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--// Timeline icon -->

    <!-- Timeline content -->
    <div class="timeline-content mb-10 mt-n2">
        <!-- Timeline heading -->
        <div class="overflow-auto pe-3">
            <!-- Title -->
            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
            <!--// Title -->

            <!-- Description -->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!-- Info -->
                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                <!--// Info -->

                <!-- User -->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                    <img src="assets/media/avatars/300-1.jpg" alt="img">
                </div>
                <!--// User -->
            </div>
            <!--// Description -->
        </div>
        <!--// Timeline heading -->
    </div>
    <!--// Timeline content -->
</div>
<!--// Timeline item -->
					<!-- Timeline item -->
<div class="timeline-item">
    <!-- Timeline line -->
    <div class="timeline-line w-40px"></div>
    <!--// Timeline line -->

    <!-- Timeline icon -->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>        </div>
    </div>
    <!--// Timeline icon -->

    <!-- Timeline content -->
    <div class="timeline-content mb-10 mt-n1">
        <!-- Timeline heading -->
        <div class="mb-5 pe-3">
            <!-- Title -->
            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
            <!--// Title -->

            <!-- Description -->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!-- Info -->
                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                <!--// Info -->

                <!-- User -->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                    <img src="assets/media/avatars/300-23.jpg" alt="img">
                </div>
                <!--// User -->
            </div>
            <!--// Description -->
        </div>
        <!--// Timeline heading -->

        <!-- Timeline details -->
        <div class="overflow-auto pb-5">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                <!-- Item -->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                    <!-- Icon -->
                    <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg">
                    <!--// Icon -->

                    <!-- Info -->
                    <div class="ms-1 fw-semibold">
                        <!-- Desc -->
                        <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--// Desc -->

                        <!-- Number -->
                        <div class="text-gray-400">1.9mb</div>
                        <!--// Number -->
                    </div>
                    <!-- Info -->
                </div>
                <!--// Item -->

                <!-- Item -->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                    <!-- Icon -->
                    <img alt="/metronic8/demo1/../demo1/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg">
                    <!--// Icon -->

                    <!-- Info -->
                    <div class="ms-1 fw-semibold">
                        <!-- Desc -->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--// Desc -->

                        <!-- Number -->
                        <div class="text-gray-400">18kb</div>
                        <!--// Number -->
                    </div>
                    <!--// Info -->
                </div>
                <!--// Item -->

                <!-- Item -->
                <div class="d-flex flex-aligns-center">
                    <!-- Icon -->
                    <img alt="/metronic8/demo1/../demo1/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg">
                    <!--// Icon -->

                    <!-- Info -->
                    <div class="ms-1 fw-semibold">
                        <!-- Desc -->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--// Desc -->

                        <!-- Number -->
                        <div class="text-gray-400">20mb</div>
                        <!--// Number -->
                    </div>
                    <!--// Icon -->
                </div>
                <!--// Item -->
            </div>
        </div>
        <!--// Timeline details -->
    </div>
    <!--// Timeline content -->
</div>
<!--// Timeline item -->
					<!-- Timeline item -->
<div class="timeline-item">
    <!-- Timeline line -->
    <div class="timeline-line w-40px"></div>
    <!--// Timeline line -->

    <!-- Timeline icon -->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--// Timeline icon -->

        <!-- Timeline content -->
    <div class="timeline-content mb-10 mt-n1">
        <!-- Timeline heading -->
        <div class="pe-3 mb-5">
            <!-- Title -->
            <div class="fs-5 fw-semibold mb-2">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:
            </div>
            <!--// Title -->

            <!-- Description -->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!-- Info -->
                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                <!--// Info -->

                <!-- User -->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="assets/media/avatars/300-14.jpg" alt="img">
                </div>
                <!--// User -->
            </div>
            <!--// Description -->
        </div>
        <!--// Timeline heading -->
    </div>
    <!--// Timeline content -->
</div>
<!--// Timeline item -->
					<!-- Timeline item -->
<div class="timeline-item">
    <!-- Timeline line -->
    <div class="timeline-line w-40px"></div>
    <!--// Timeline line -->

    <!-- Timeline icon -->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--// Timeline icon -->

    <!-- Timeline content -->
    <div class="timeline-content mb-10 mt-n1">
        <!-- Timeline heading -->
        <div class="pe-3 mb-5">
            <!-- Title -->
            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
            <!--// Title -->

            <!-- Description -->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!-- Info -->
                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                <!--// Info -->

                <!-- User -->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                    <img src="assets/media/avatars/300-2.jpg" alt="img">
                </div>
                <!--// User -->
            </div>
            <!--// Description -->
        </div>
        <!--// Timeline heading -->

        <!-- Timeline details -->
        <div class="overflow-auto pb-5">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                <!-- Item -->
                <div class="overlay me-10">
                    <!-- Image -->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg">
                    </div>
                    <!--// Image -->

                    <!-- Link -->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--// Link -->
                </div>
                <!--// Item -->

                <!-- Item -->
                <div class="overlay me-10">
                    <!-- Image -->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg">
                    </div>
                    <!--// Image -->

                    <!-- Link -->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--// Link -->
                </div>
                <!--// Item -->

                <!-- Item -->
                <div class="overlay">
                    <!-- Image -->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg">
                    </div>
                    <!--// Image -->

                    <!-- Link -->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--// Link -->
                </div>
                <!--// Item -->
            </div>
        </div>
        <!--// Timeline details -->
    </div>
    <!--// Timeline content -->
</div>
<!--// Timeline item -->
					<!-- Timeline item -->
<div class="timeline-item">
    <!-- Timeline line -->
    <div class="timeline-line w-40px"></div>
    <!--// Timeline line -->

    <!-- Timeline icon -->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--// Timeline icon -->

    <!-- Timeline content -->
    <div class="timeline-content mb-10 mt-n1">
        <!-- Timeline heading -->
        <div class="pe-3 mb-5">
            <!-- Title -->
            <div class="fs-5 fw-semibold mb-2">
                New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                is assigned to you in Multi-platform Database Design project
            </div>
            <!--// Title -->

            <!-- Description -->
            <div class="overflow-auto pb-5">
                <!-- Wrapper -->
                <div class="d-flex align-items-center mt-1 fs-6">
                    <!-- Info -->
                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                    <!--// Info -->

                    <!-- User -->
                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                    <!--// User -->
                </div>
                <!--// Wrapper -->
            </div>
            <!--// Description -->
        </div>
        <!--// Timeline heading -->
    </div>
    <!--// Timeline content -->
</div>
<!--// Timeline item -->
					<!-- Timeline item -->
<div class="timeline-item">
    <!-- Timeline line -->
    <div class="timeline-line w-40px"></div>
    <!--// Timeline line -->

    <!-- Timeline icon -->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>        </div>
    </div>
    <!--// Timeline icon -->

    <!-- Timeline content -->
    <div class="timeline-content mb-10 mt-n1">
        <!-- Timeline heading -->
        <div class="pe-3 mb-5">
            <!-- Title -->
            <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
            <!--// Title -->

            <!-- Description -->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!-- Info -->
                <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                <!--// Info -->

                <!-- User -->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                    <img src="assets/media/avatars/300-4.jpg" alt="img">
                </div>
                <!--// User -->
            </div>
            <!--// Description -->
        </div>
        <!--// Timeline heading -->

        <!-- Timeline details -->
        <div class="overflow-auto pb-5">

<!-- Notice -->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
            <!-- Icon -->
        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--// Icon -->

    <!-- Wrapper -->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!-- Content -->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>

                                    <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                            </div>
            <!--// Content -->

                    <!-- Action -->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">
                Proceed            </a>
            <!--// Action -->
            </div>
    <!--// Wrapper -->
</div>
<!--// Notice -->

        </div>
        <!--// Timeline details -->
    </div>
    <!--// Timeline content -->
</div>
<!--// Timeline item -->
					<!-- Timeline item -->
<div class="timeline-item">
    <!-- Timeline line -->
    <div class="timeline-line w-40px"></div>
    <!--// Timeline line -->

    <!-- Timeline icon -->
    <div class="timeline-icon symbol symbol-circle symbol-40px">
        <div class="symbol-label bg-light">
            <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>        </div>
    </div>
    <!--// Timeline icon -->

    <!-- Timeline content -->
    <div class="timeline-content mt-n1">
        <!-- Timeline heading -->
        <div class="pe-3 mb-5">
            <!-- Title -->
            <div class="fs-5 fw-semibold mb-2">
                New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                is placed for Workshow Planning & Budget Estimation
            </div>
            <!--// Title -->

            <!-- Description -->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!-- Info -->
                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                <!--// Info -->

                <!-- User -->
                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                <!--// User -->
            </div>
            <!--// Description -->
        </div>
        <!--// Timeline heading -->
    </div>
    <!--// Timeline content -->
</div>
<!--// Timeline item --> 				</div>
				<!--// Timeline items -->
			</div>
			<!--// Content -->
		</div>
		<!--// Body -->

		<!-- Footer -->
		<div class="card-footer py-5 text-center" id="kt_activities_footer">
			<a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
				View All Activities <i class="ki-duotone ki-arrow-right fs-3 text-primary"><span class="path1"></span><span class="path2"></span></i>			</a>
		</div>
		<!--// Footer -->
	</div>
</div>
<!--// Activities drawer -->

<!-- Chat drawer -->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

    <!-- Messenger -->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!-- Card header -->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!-- Title -->
            <div class="card-title">
                <!-- User -->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                    <!-- Info -->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                    <!--// Info -->
                </div>
                <!--// User -->
            </div>
            <!--// Title -->

            <!-- Card toolbar -->
            <div class="card-toolbar">
                <!-- Menu -->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                    </button>

<!-- Menu 3 -->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
    <!-- Heading -->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Contacts
        </div>
    </div>
    <!--// Heading -->

    <!-- Menu item -->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
            Add Contact
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
            Invite Contacts

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Groups</span>
            <span class="menu-arrow"></span>
        </a>

        <!-- Menu sub -->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Create Group
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Invite Members
                </a>
            </div>
            <!--// Menu item -->

            <!-- Menu item -->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Settings
                </a>
            </div>
            <!--// Menu item -->
        </div>
        <!--// Menu sub -->
    </div>
    <!--// Menu item -->

    <!-- Menu item -->
    <div class="menu-item px-3 my-1">
        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
            Settings
        </a>
    </div>
    <!--// Menu item -->
</div>
<!--// Menu 3 -->
                </div>
                <!--// Menu -->

                <!-- Close -->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--// Close -->
            </div>
            <!--// Card toolbar -->
        </div>
        <!--// Card header -->

        <!-- Card body -->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!-- Messages -->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">



    <!-- Message(in) -->
    <div class="d-flex justify-content-start mb-10 ">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-start">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--// Avatar -->
                    <!-- Details -->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">2 mins</span>
                    </div>
                    <!--// Details -->

            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                How likely are you to recommend our company to your friends and family ?            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(in) -->

    <!-- Message(out) -->
    <div class="d-flex justify-content-end mb-10 ">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-end">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Details -->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">5 mins</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--// Details -->

                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-1.jpg"></div><!--// Avatar -->
            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(out) -->

    <!-- Message(in) -->
    <div class="d-flex justify-content-start mb-10 ">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-start">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--// Avatar -->
                    <!-- Details -->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">1 Hour</span>
                    </div>
                    <!--// Details -->

            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Ok, Understood!            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(in) -->

    <!-- Message(out) -->
    <div class="d-flex justify-content-end mb-10 ">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-end">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Details -->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">2 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--// Details -->

                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-1.jpg"></div><!--// Avatar -->
            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                You’ll receive notifications for all issues, pull requests!            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(out) -->

    <!-- Message(in) -->
    <div class="d-flex justify-content-start mb-10 ">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-start">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--// Avatar -->
                    <!-- Details -->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">3 Hours</span>
                    </div>
                    <!--// Details -->

            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com">Keenthemes.com</a>            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(in) -->

    <!-- Message(out) -->
    <div class="d-flex justify-content-end mb-10 ">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-end">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Details -->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">4 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--// Details -->

                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-1.jpg"></div><!--// Avatar -->
            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Most purchased Business courses during this sale!            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(out) -->

    <!-- Message(in) -->
    <div class="d-flex justify-content-start mb-10 ">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-start">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--// Avatar -->
                    <!-- Details -->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">5 Hours</span>
                    </div>
                    <!--// Details -->

            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(in) -->

    <!-- Message(template for out) -->
    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-end">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Details -->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">Just now</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--// Details -->

                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-1.jpg"></div><!--// Avatar -->
            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(template for out) -->

    <!-- Message(template for in) -->
    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
        <!-- Wrapper -->
        <div class="d-flex flex-column align-items-start">
            <!-- User -->
            <div class="d-flex align-items-center mb-2">
                                    <!-- Avatar --><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--// Avatar -->
                    <!-- Details -->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">Just now</span>
                    </div>
                    <!--// Details -->

            </div>
            <!--// User -->

            <!-- Text -->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Right before vacation season we have the next Big Deal for you.            </div>
            <!--// Text -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Message(template for in) -->
            </div>
            <!--// Messages -->
        </div>
        <!--// Card body -->

        <!-- Card footer -->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!-- Input -->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">

            </textarea>
            <!--// Input -->

            <!-- Toolbar -->
            <div class="d-flex flex-stack">
                <!-- Actions -->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-paper-clip fs-3"></i>                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span class="path2"></span></i>                    </button>
                </div>
                <!--// Actions -->

                <!-- Send -->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--// Send -->
            </div>
            <!--// Toolbar -->
        </div>
        <!--// Card footer -->
    </div>
    <!--// Messenger -->
</div>
<!--// Chat drawer -->

<!-- Chat drawer -->
<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">

    <!-- Messenger -->
    <div class="card card-flush w-100 rounded-0">
        <!-- Card header -->
        <div class="card-header">
            <!-- Title -->
            <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
            <!--// Title -->

            <!-- Card toolbar -->
            <div class="card-toolbar">
                <!-- Close -->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--// Close -->
            </div>
            <!--// Card toolbar -->
        </div>
        <!--// Card header -->

        <!-- Card body -->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!-- Item -->
                <div class="d-flex flex-stack">
                    <!-- Wrapper -->
                    <div class="d-flex flex-column me-3">
                        <!-- Section -->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--// Section -->

                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--// Wrapper -->
                    </div>
                    <!--// Wrapper -->

                    <!-- Pic -->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-1.jpg" alt="">
                    </div>
                    <!--// Pic -->
                </div>
                <!--// Item -->

                                    <!-- Separator -->
                    <div class="separator separator-dashed my-6"></div>
                    <!--// Separator -->


                <!-- Item -->
                <div class="d-flex flex-stack">
                    <!-- Wrapper -->
                    <div class="d-flex flex-column me-3">
                        <!-- Section -->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--// Section -->

                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--// Wrapper -->
                    </div>
                    <!--// Wrapper -->

                    <!-- Pic -->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-3.jpg" alt="">
                    </div>
                    <!--// Pic -->
                </div>
                <!--// Item -->

                                    <!-- Separator -->
                    <div class="separator separator-dashed my-6"></div>
                    <!--// Separator -->


                <!-- Item -->
                <div class="d-flex flex-stack">
                    <!-- Wrapper -->
                    <div class="d-flex flex-column me-3">
                        <!-- Section -->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--// Section -->

                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--// Wrapper -->
                    </div>
                    <!--// Wrapper -->

                    <!-- Pic -->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-8.jpg" alt="">
                    </div>
                    <!--// Pic -->
                </div>
                <!--// Item -->

                                    <!-- Separator -->
                    <div class="separator separator-dashed my-6"></div>
                    <!--// Separator -->


                <!-- Item -->
                <div class="d-flex flex-stack">
                    <!-- Wrapper -->
                    <div class="d-flex flex-column me-3">
                        <!-- Section -->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--// Section -->

                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--// Wrapper -->
                    </div>
                    <!--// Wrapper -->

                    <!-- Pic -->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-26.jpg" alt="">
                    </div>
                    <!--// Pic -->
                </div>
                <!--// Item -->

                                    <!-- Separator -->
                    <div class="separator separator-dashed my-6"></div>
                    <!--// Separator -->


                <!-- Item -->
                <div class="d-flex flex-stack">
                    <!-- Wrapper -->
                    <div class="d-flex flex-column me-3">
                        <!-- Section -->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--// Section -->

                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--// Wrapper -->
                    </div>
                    <!--// Wrapper -->

                    <!-- Pic -->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-21.jpg" alt="">
                    </div>
                    <!--// Pic -->
                </div>
                <!--// Item -->

                                    <!-- Separator -->
                    <div class="separator separator-dashed my-6"></div>
                    <!--// Separator -->


                <!-- Item -->
                <div class="d-flex flex-stack">
                    <!-- Wrapper -->
                    <div class="d-flex flex-column me-3">
                        <!-- Section -->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--// Section -->

                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--// Wrapper -->
                    </div>
                    <!--// Wrapper -->

                    <!-- Pic -->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-34.jpg" alt="">
                    </div>
                    <!--// Pic -->
                </div>
                <!--// Item -->

                                    <!-- Separator -->
                    <div class="separator separator-dashed my-6"></div>
                    <!--// Separator -->


                <!-- Item -->
                <div class="d-flex flex-stack">
                    <!-- Wrapper -->
                    <div class="d-flex flex-column me-3">
                        <!-- Section -->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--// Section -->

                        <!-- Section -->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--// Wrapper -->
                    </div>
                    <!--// Wrapper -->

                    <!-- Pic -->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-27.jpg" alt="">
                    </div>
                    <!--// Pic -->
                </div>
                <!--// Item -->



        </div>
        <!--// Card body -->

        <!-- Card footer -->
        <div class="card-footer">
            <!-- Item -->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Total</span>
                <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
            </div>
            <!--// Item -->

            <!-- Item -->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Sub total</span>
                <span class="text-primary fw-bolder fs-5">$ 246.35</span>
            </div>
            <!--// Item -->

            <!--// Action -->
            <div class="d-flex justify-content-end mt-9">
                <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
            </div>
            <!--// Action -->
        </div>
        <!--// Card footer -->
    </div>
    <!--// Messenger -->
</div>
<!--// Chat drawer -->
<!--// Drawers -->
		<!-- Engage -->
		<div class="app-engage " id="kt_app_engage">
							<!-- Prebuilts toggle -->
				<a href="#" data-bs-toggle="modal" data-bs-target="#kt_app_engage_prebuilts_modal" class="app-engage-btn hover-dark">
					<i class="ki-duotone ki-abstract-41 fs-1 pt-1 mb-2"><span class="path1"></span><span class="path2"></span></i>					Prebuilts
				</a>
				<!--// Prebuilts toggle -->


							<!-- Get help -->
				<a href="https://devs.keenthemes.com" target="_blank" class="app-engage-btn hover-primary">
					<i class="ki-duotone ki-like-shapes fs-1 pt-1 mb-2"><span class="path1"></span><span class="path2"></span></i>					Get Help
				</a>
				<!--// Get help -->

							<!-- Prebuilts toggle -->
				<a href="https://1.envato.market/EA4JP" target="_blank" class="app-engage-btn hover-success">
					<i class="ki-duotone ki-basket fs-2 pt-1 mb-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>					Buy Now
				</a>
				<!--// Prebuilts toggle -->

							<!-- Engage close -->
				<a href="#" id="kt_app_engage_toggle_off" class="app-engage-btn app-engage-btn-toggle-off text-hover-primary p-0">
					<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>				</a>
				<!--// Engage close -->

				<!-- Engage close -->
				<a href="#" id="kt_app_engage_toggle_on" class="app-engage-btn app-engage-btn-toggle-on text-hover-primary p-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-inverse" data-bs-dimiss="click" title="Explore Metronic">
					<i class="ki-duotone ki-question fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>				</a>
				<!--// Engage close -->
					</div>
		<!--// Engage -->

		<!-- Engage modals -->
					<!-- Modal - Sitemap -->
<div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1" aria-hidden="true">
    <!-- Modal dialog -->
    <div class="modal-dialog modal-fullscreen p-5 p-lg-10" id="kt_engage_prebuilts_modal_dialog">
        <!-- Modal content -->
        <div class="modal-content rounded-4">
            <!-- Modal header -->
            <div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
                <!-- View menu -->
<div id="kt_app_engage_prebuilts_view_menu" class="position-relative z-index-1">
	<!-- Toggle -->
	<button type="button" data-kt-element="selected" class="btn btn-flex px-0 rotate-" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, -1px">
		<!-- Title -->
		<span class="fs-6 fw-bold text-gray-600 me-2" data-kt-element="title">
			Image View
		</span>
		<!--// Title -->

		<!-- Arrow -->
		<i class="ki-duotone ki-down fs-4 text-gray-600 rotate-180-"></i>		<!--// Arrow -->
	</button>
	<!--// Toggle -->

	<!-- Menu -->
	<div class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3" data-kt-menu="true">
		<!-- Menu item -->
		<div class="menu-item">
			<!-- Menu link -->
			<a href="#" class="menu-link px-4 py-2 active" data-kt-mode="image">
				Image View
			</a>
			<!--// Menu link -->
		</div>
		<!--// Menu item -->

		<!-- Menu item -->
		<div class="menu-item">
			<!-- Menu link -->
			<a href="#" class="menu-link px-4 py-2" data-kt-mode="text">
				Text View
			</a>
			<!--// Menu link -->
		</div>
		<!--// Menu item -->
	</div>
	<!--// Menu -->
</div>
<!--// View menu -->
                <!-- Close -->
                <div class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross-square fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--// Close -->
            </div>
            <!--// Modal header -->

            <!-- Modal body -->
            <div class="modal-body pt-0 pb-5 px-15 mt-n5" id="kt_app_engage_prebuilts_body">
                <div class="container-fluid">

<style>
	.app-prebuilts-thumbnail {
		border: 1px solid var(--kt-body-bg);
		filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
	}
</style>

<!-- Image view -->
<div class="d-block" id="kt_app_engage_prebuilts_view_image">
	<!-- Tabs wrapper -->
	<div class="d-flex flex-center" id="kt_app_engage_prebuilts_view_image_tabs">
		<!-- Tabs -->
		<ul class="nav nav-tabs border-0 mb-5">
							<!-- Tab item -->
				<li class="nav-item px-2">
					<!-- Tab link -->
					<a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_demos">

						Layouts					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item px-2">
					<!-- Tab link -->
					<a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_dashboards">

						Dashboards					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item px-2">
					<!-- Tab link -->
					<a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages">

						Pages					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item px-2">
					<!-- Tab link -->
					<a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_apps">

						Apps					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
					</ul>
		<!--// Tabs -->
	</div>
	<!--// Tabs wrapper -->

	<!-- Tab content -->
	<div class="tab-content">
								<div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_demos" role="tabpanel">
				<!-- Scroll wrapper -->
				<div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">

					<!-- Row -->
					<div class="row gy-10">


	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Metronic Original	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo1.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo2/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		SaaS App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo2.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo30/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Tracking App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo30.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo39/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing SaaS	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo39.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo31/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing Automation	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo31.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo27/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Databox Dashboard	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo27.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo6/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Time Reporting	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo6.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo3/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Trend	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo3.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo23/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Member Dashboard	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo23.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo38/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Email Marketing	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo38.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo36/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Digital Marketing	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo36.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo10/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Grid	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo10.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo35/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Traffic Analytics	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo35.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo8/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Analytics App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo8.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo25/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Guiding App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo25.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo20/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		CRM Software	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo20.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo7/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		CRM Dashboard	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo7.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo50/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Micro-SaaS App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo50.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo32/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery Management	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo32.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo42/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar Workspace	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo42.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo44/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Recruit Automation	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo44.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo33/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social Campaings	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo33.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo37/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Cloud Suite	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo37.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo11/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance Planner	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo11.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo16/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo16.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo26/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Planable App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo26.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo22/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Media Publisher	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo22.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo19/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reports Panel	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo19.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo40/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		HR App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo40.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo29/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Workspace	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo29.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo24/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Helpdesk App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo24.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo4/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Jobs Site	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo4.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo41/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Business Intelligence	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo41.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo18/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Goal Tracking	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo18.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo21/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Monochrome App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo21.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo34/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance Analytics	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo34.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo15/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto Planner	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo15.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo14/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Workplace	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo14.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo9/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Manager	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo9.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo5/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Forum	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo5.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo13/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Classic Dashboard	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo13.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo12/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Data Analyzer	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo12.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo48/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Cloud ERP	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo48.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo28/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		eCommerce App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo28.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo17/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Events Scheduler	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo17.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo49/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		KPI Tracking	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo49.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo43/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Healthcare Dashboard	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo43.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo45/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		OKR Tracking	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo45.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo47/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Campaign Automation	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo47.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">


<!-- Preview -->
<a href="https://preview.keenthemes.com/metronic8/demo46/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Audit Board App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/demos/demo46.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->


					</div>
					<!--// Row -->
				</div>
				<!--// Scroll wrapper -->
			</div>
								<div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards" role="tabpanel">
				<!-- Scroll wrapper -->
				<div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">

					<!-- Row -->
					<div class="row gy-10">



	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Multipurpose	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/multipurpose-demo1.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/marketing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/marketing.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/social.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/social.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/ecommerce.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/ecommerce.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/store-analytics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Store-analytics	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/store-analytics.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/logistics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logistics	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/logistics.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/delivery.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/delivery.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/online-courses.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Online-courses	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/online-courses.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/school.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		School	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/school.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/crypto.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/crypto.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/finance-performance.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance-performance	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/finance-performance.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/website-analytics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Website-analytics	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/website-analytics.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/bidding.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Bidding	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/bidding.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/podcast.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/podcast.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/projects.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/projects.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/call-center.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Call-center	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/call-center.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-md-4">

<!-- Preview -->
<a href="dashboards/pos.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		POS	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/dashboards/pos.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

					</div>
					<!--// Row -->
				</div>
				<!--// Scroll wrapper -->
			</div>
											<div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
				<!-- Scroll wrapper -->
				<div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">

					<!-- Row -->
					<div class="row gy-10">


	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/projects/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/projects.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/ecommerce/catalog/products/products.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/ecommerce.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/customers/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Customers	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/customers.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/subscriptions/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscriptions	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/subscriptions.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/user-management/users/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Management	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/user-management.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/invoices/create/main.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invoices	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/invoices.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/support-center/overview/main.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Center	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/support-center.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/chat/private.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Chat	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/chat.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/calendar/calendar.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/calendar.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/file-manager/list/folders.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		File Manager	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/file-manager.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/inbox/listing/listing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Inbox	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/inbox.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

	<!-- Col -->
	<div class="col-lg-4">

<!-- Preview -->
<a href="apps/contacts/getting-started.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contacts	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/apps/contacts.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->	</div>
	<!--// Col -->

					</div>
					<!--// Row -->
				</div>
				<!--// Scroll wrapper -->
			</div>

		<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages">

<!-- Tabs wrapper -->
<div class="d-flex flex-center mb-5">
	<div class="border-bottom">
		<!-- Tabs -->
		<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4">
							<!-- Tab item -->
				<li class="nav-item p-0 m-0">
					<!-- Tab link -->
					<a class="nav-link text-muted text-active-primary pt-0 pb-4
						active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_authentication">

						Authentication					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item p-0 m-0">
					<!-- Tab link -->
					<a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_general">

						General					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item p-0 m-0">
					<!-- Tab link -->
					<a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_account">

						Account					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item p-0 m-0">
					<!-- Tab link -->
					<a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_modals">

						Modals					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item p-0 m-0">
					<!-- Tab link -->
					<a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_wizards">

						Wizards					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item p-0 m-0">
					<!-- Tab link -->
					<a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_search">

						Search					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item p-0 m-0">
					<!-- Tab link -->
					<a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_widgets">

						Widgets					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
							<!-- Tab item -->
				<li class="nav-item p-0 m-0">
					<!-- Tab link -->
					<a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_email-templates">

						Email Templates					</a>
					<!--// Tab link -->
				</li>
				<!--// Tab item -->
					</ul>
		<!--// Tabs -->
	</div>
</div>
<!--// Tabs wrapper -->

<!-- Scroll wrapper -->
<div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" data-kt-scroll-offset="250px">

	<!-- Tab content -->
	<div class="tab-content">
					<div class="tab-pane fade show active" id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">


					<!-- Row -->
<div class="row g-10">

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="#" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Corporate	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-corporate.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/layouts/creative/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Creative	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-creative.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/layouts/fancy/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Fancy	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-fancy.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/layouts/overlay/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overlay	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-overlay.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/extended/multi-steps-sign-up.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Multi-Step	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-multistep.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/layouts/corporate/two-factor.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Two-Factor	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-2factor.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/general/password-confirmation.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Password Changed	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-passwordchanged.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/general/verify-email.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Verify Email	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-verifyemail.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/general/welcome.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-welcome.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/general/coming-soon.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Coming Soon	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-comingsoon.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/general/account-deactivated.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Account Deactivated	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-accountdeactivated.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/general/error-404.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		404 Page	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-404.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/general/error-500.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		505 Page	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/auth-500.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->
	</div>
<!--// Row -->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_general" role="tabpanel">


											<div class="mb-5">
							<!-- Collapse toggle -->
<a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">

	<span class="fw-bolder fs-2">
		User Profile	</span>

	<i class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span></i>
</a>
<!--// Collapse toggle -->

<!-- Collapse content -->
<div class="show" id="kt_app_engage_prebuilts_tab_pages_general_user-profile">
	<!-- Row -->
	<div class="row g-10 pt-2 pb-5">

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/user-profile/overview.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Profile Overview	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/user-profile/projects.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Projects	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/user-profile/campaigns.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Campaigns	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/profile-campaigns.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/user-profile/documents.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Documents	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/profile-documents.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/user-profile/followers.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Followers	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/profile-followers.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/user-profile/activity.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Activity	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/profile-activity.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->
			</div>
	<!--// Row -->
</div>
<!--// Collapse content -->						</div>
											<div class="mb-5">
							<!-- Collapse toggle -->
<a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_corporate">

	<span class="fw-bolder fs-2">
		Corporate	</span>

	<i class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span></i>
</a>
<!--// Collapse toggle -->

<!-- Collapse content -->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_corporate">
	<!-- Row -->
	<div class="row g-10 pt-2 pb-5">

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/about.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		About Us	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/corporate-aboutus.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/contact.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contact Us	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/corporate-contactus.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/licenses.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		License	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/corporate-license.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/team.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Our Team	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/corporate-ourteam.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/sitemap.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sitemap	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/corporate-sitemap.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->
			</div>
	<!--// Row -->
</div>
<!--// Collapse content -->						</div>
											<div class="mb-5">
							<!-- Collapse toggle -->
<a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_social">

	<span class="fw-bolder fs-2">
		Social	</span>

	<i class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span></i>
</a>
<!--// Collapse toggle -->

<!-- Collapse content -->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_social">
	<!-- Row -->
	<div class="row g-10 pt-2 pb-5">

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/social/feeds.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Activity	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/social-activity.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/social/activity.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/social-feeds.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/social/followers.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Followers	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/social-followers.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/social/settings.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/social-settings.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->
			</div>
	<!--// Row -->
</div>
<!--// Collapse content -->						</div>
											<div class="mb-5">
							<!-- Collapse toggle -->
<a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_others">

	<span class="fw-bolder fs-2">
		Others	</span>

	<i class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span></i>
</a>
<!--// Collapse toggle -->

<!-- Collapse content -->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_others">
	<!-- Row -->
	<div class="row g-10 pt-2 pb-5">

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/faq/classic.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Classic	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/faq-classic.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/faq/extended.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Extended	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/faq-extended.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/blog/home.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Home	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/blog-home.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->

			<!-- Col -->
			<div class="col-lg-4">

<!-- Preview -->
<a href="pages/blog/post.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Post	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/blog-post.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->			</div>
			<!--// Col -->
			</div>
	<!--// Row -->
</div>
<!--// Collapse content -->						</div>


			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_account" role="tabpanel">


					<!-- Row -->
<div class="row g-10">

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/overview.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overview	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-overview.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/settings.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-settings.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/billing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/security.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Security	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-security.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/referrals.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Referrals	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-referrals.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/logs.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logs	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-logs.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/api-keys.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		API Keys	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-apikeys.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/statements.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statements	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-statements.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="account/billing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->
	</div>
<!--// Row -->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_modals" role="tabpanel">


					<!-- Row -->
<div class="row g-10">

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/general/view-users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		View Friends	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-viewfriends.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/general/upgrade-plan.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Upgrade Plan	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-upgradeplan.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/wizards/top-up-wallet.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Topup Wallet	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-topupwallet.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/general/share-earn.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Share & Earn	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-shareandearn.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/general/select-users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Select User	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-selectuser.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/forms/bidding.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Place Bid	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-placeyourbid.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/wizards/offer-a-deal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Offer Deal	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-offeradeal.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/forms/new-target.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Target	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-newtarget.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/forms/new-card.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Card	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-newcard.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/forms/new-address.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Address	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-newaddress.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/general/invite-friends.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invite Friend	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-invitefriend.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/wizards/create-project.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Project	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-createproject.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/wizards/create-campaign.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Campaign	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-createcampaign.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/wizards/create-account.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Business Account	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-createbusinessacc.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/wizards/create-app.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create App	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-createapp.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/forms/create-api-key.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Api Key	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-createapikey.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/modals/wizards/two-factor-authentication.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/modal-2factorauth.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->
	</div>
<!--// Row -->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_wizards" role="tabpanel">


					<!-- Row -->
<div class="row g-10">

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/wizards/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/wizard-2factorauth.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/wizards/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Horizontal	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/wizard-horizontal.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/wizards/vertical.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Vertical	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/wizard-vertical.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->
	</div>
<!--// Row -->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_search" role="tabpanel">


					<!-- Row -->
<div class="row g-10">

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/search/users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Users	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/search-users.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/search/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Horizontal	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/search-horizontal.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/search/vertical.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Vertical	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/search-vertical.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="utilities/search/select-location.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Location	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/search-location.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->
	</div>
<!--// Row -->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_widgets" role="tabpanel">


					<!-- Row -->
<div class="row g-10">

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="widgets/charts.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Charts	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/widgets-charts.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="widgets/feeds.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/widgets-feeds.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="widgets/lists.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Lists	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/widgets-lists.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="widgets/mixed.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Mixed	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/widgets-mixed.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="widgets/statistics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statistics	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/widgets-stats.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="widgets/tables.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Tables	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/widgets-tables.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->
	</div>
<!--// Row -->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_email-templates" role="tabpanel">


					<!-- Row -->
<div class="row g-10">

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/email/welcome-message.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/email-welcome.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/email/subscription-confirmed.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscription Confirmed	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/email/reset-password.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reset Password	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/email-resetpassword.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/email/card-declined.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Card Declined	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/email-creditcarddeclined.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/email/promo-1.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 1	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/email-promo1.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/email/promo-2.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 2	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/email-promo2.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->

		<!-- Col -->
		<div class="col-lg-4">

<!-- Preview -->
<a href="authentication/email/promo-3.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
	<!-- Title -->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 3	</h3>
	<!--// Title -->

	<!-- Thumbnail -->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assets/media/preview/prebuilts/pages/email-promo3.png" class="lozad w-100 rounded">
	</span>
	<!--// Thumbnail -->
</a>
<!--// Preview -->		</div>
		<!--// Col -->
	</div>
<!--// Row -->

			</div>
			</div>
	<!--// Tab content -->
</div>
<!--// Scroll wrapper -->		</div>
	</div>
	<!--// Tab content -->
</div>
<!--// Image view -->
<!-- Text view -->
<div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
	<!-- Heading -->
	<h1 class="fs-2x text-dark fw-bolder text-center mb-4" id="kt_app_engage_prebuilts_view_text_heading">
		Sitemap
	</h1>
	<!--// Heading -->

	<!-- Wrapper -->
	<div id="kt_app_engage_prebuilts_view_text_heading" class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" data-kt-scroll-offset="190px">
								<!-- Section -->
			<div class="mb-10 mb-lg-17">

<!-- Title -->
<h3 class="text-dark fw-bolder mb-7">
	Layouts
</h3>
<!--// Title -->

<!-- Row -->
<div class="row">

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">


			<a class="fw-6 fw-semibold" href="index.html">
				Metronic Original			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo2/index.html">
				SaaS App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo30/index.html">
				Sales Tracking App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo39/index.html">
				Billing SaaS			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo31/index.html">
				Marketing Automation			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo27/index.html">
				Databox Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo6/index.html">
				Time Reporting			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo3/index.html">
				New Trend			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo23/index.html">
				Member Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo38/index.html">
				Email Marketing			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo36/index.html">
				Digital Marketing			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo10/index.html">
				Project Grid			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo35/index.html">
				Traffic Analytics			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">


			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo8/index.html">
				Analytics App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo25/index.html">
				User Guiding App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo20/index.html">
				CRM Software			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo7/index.html">
				CRM Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo50/index.html">
				Micro-SaaS App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo32/index.html">
				Delivery Management			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo42/index.html">
				Calendar Workspace			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo44/index.html">
				Recruit Automation			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo33/index.html">
				Social Campaings			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo37/index.html">
				Cloud Suite			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo11/index.html">
				Finance Planner			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo16/index.html">
				Podcast App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo26/index.html">
				Planable App			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">


			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo22/index.html">
				Media Publisher			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo19/index.html">
				Reports Panel			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo40/index.html">
				HR App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo29/index.html">
				Project Workspace			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo24/index.html">
				Helpdesk App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo4/index.html">
				Jobs Site			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo41/index.html">
				Business Intelligence			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo18/index.html">
				Goal Tracking			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo21/index.html">
				Monochrome App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo34/index.html">
				Finance Analytics			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo15/index.html">
				Crypto Planner			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo14/index.html">
				Project Workplace			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo9/index.html">
				Sales Manager			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">


			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo5/index.html">
				Support Forum			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo13/index.html">
				Classic Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo12/index.html">
				Data Analyzer			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo48/index.html">
				Cloud ERP			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo28/index.html">
				eCommerce App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo17/index.html">
				Events Scheduler			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo49/index.html">
				KPI Tracking			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo43/index.html">
				Healthcare Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo45/index.html">
				OKR Tracking			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo47/index.html">
				Campaign Automation			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo46/index.html">
				Audit Board App			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->
			</div>
<!--// Row -->

			</div>
			<!--// Section -->



								<!-- Section -->
			<div class="mb-10 mb-lg-17">

<!-- Title -->
<h3 class="text-dark fw-bolder mb-7">
	Dashboards
</h3>
<!--// Title -->

<!-- Row -->
<div class="row">

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="index.html">
				Multipurpose			</a>




			<a class="fw-6 fw-semibold" href="dashboards/marketing.html">
				Marketing Dashboard			</a>




			<a class="fw-6 fw-semibold" href="dashboards/social.html">
				Social Dashboard			</a>




			<a class="fw-6 fw-semibold" href="dashboards/ecommerce.html">
				eCommerce Dashboard			</a>




			<a class="fw-6 fw-semibold" href="dashboards/store-analytics.html">
				Store Analytics			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->


					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="dashboards/logistics.html">
				Logistics			</a>




			<a class="fw-6 fw-semibold" href="dashboards/delivery.html">
				Delivery			</a>




			<a class="fw-6 fw-semibold" href="dashboards/online-courses.html">
				Online Courses			</a>




			<a class="fw-6 fw-semibold" href="dashboards/school.html">
				Hello Tyler			</a>




			<a class="fw-6 fw-semibold" href="dashboards/crypto.html">
				My Balance: 37,045$			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->


					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="dashboards/finance-performance.html">
				Finance Performance			</a>




			<a class="fw-6 fw-semibold" href="dashboards/website-analytics.html">
				Website Analytics			</a>




			<a class="fw-6 fw-semibold" href="dashboards/bidding.html">
				Bidding Dashboard			</a>




			<a class="fw-6 fw-semibold" href="dashboards/podcast.html">
				Podcast Dashboard			</a>




			<a class="fw-6 fw-semibold" href="dashboards/projects.html">
				Projects Dashboard			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->


					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="dashboards/call-center.html">
				Call Center			</a>




			<a class="fw-6 fw-semibold" href="dashboards/pos.html">
				POS System			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->

	</div>
<!--// Row -->

			</div>
			<!--// Section -->



								<!-- Section -->
			<div class="mb-10 mb-lg-17">

			</div>
			<!--// Section -->


	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - Authentication		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="#">
						Corporate					</a>



					<a class="fw-6 fw-semibold" href="authentication/layouts/creative/sign-in.html">
						Creative					</a>



					<a class="fw-6 fw-semibold" href="authentication/layouts/fancy/sign-in.html">
						Fancy					</a>



					<a class="fw-6 fw-semibold" href="authentication/layouts/overlay/sign-in.html">
						Overlay					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="authentication/extended/multi-steps-sign-up.html">
						Multi-Step					</a>



					<a class="fw-6 fw-semibold" href="authentication/layouts/corporate/two-factor.html">
						Two-Factor					</a>



					<a class="fw-6 fw-semibold" href="authentication/general/password-confirmation.html">
						Password Changed					</a>



					<a class="fw-6 fw-semibold" href="authentication/general/verify-email.html">
						Verify Email					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="authentication/general/welcome.html">
						Welcome					</a>



					<a class="fw-6 fw-semibold" href="authentication/general/coming-soon.html">
						Coming Soon					</a>



					<a class="fw-6 fw-semibold" href="authentication/general/account-deactivated.html">
						Account Deactivated					</a>



					<a class="fw-6 fw-semibold" href="authentication/general/error-404.html">
						404 Page					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="authentication/general/error-500.html">
						505 Page					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - Account		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="account/overview.html">
						Overview					</a>



					<a class="fw-6 fw-semibold" href="account/settings.html">
						Settings					</a>



					<a class="fw-6 fw-semibold" href="account/billing.html">
						Billing					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="account/security.html">
						Security					</a>



					<a class="fw-6 fw-semibold" href="account/referrals.html">
						Referrals					</a>



					<a class="fw-6 fw-semibold" href="account/logs.html">
						Logs					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="account/api-keys.html">
						API Keys					</a>



					<a class="fw-6 fw-semibold" href="account/statements.html">
						Statements					</a>



					<a class="fw-6 fw-semibold" href="account/billing.html">
						Billing					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - Modals		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/modals/general/view-users.html">
						View Friends					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/general/upgrade-plan.html">
						Upgrade Plan					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/top-up-wallet.html">
						Topup Wallet					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/general/share-earn.html">
						Share & Earn					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/general/select-users.html">
						Select User					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/modals/forms/bidding.html">
						Place Bid					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/offer-a-deal.html">
						Offer Deal					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/forms/new-target.html">
						New Target					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/forms/new-card.html">
						New Card					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/forms/new-address.html">
						New Address					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/modals/general/invite-friends.html">
						Invite Friend					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/create-project.html">
						Create Project					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/create-campaign.html">
						Create Campaign					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/create-account.html">
						Create Business Account					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/create-app.html">
						Create App					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/modals/forms/create-api-key.html">
						Create Api Key					</a>



					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/two-factor-authentication.html">
						2 Factor Auth					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - Wizards		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/wizards/horizontal.html">
						2 Factor Auth					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/wizards/horizontal.html">
						Horizontal					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/wizards/vertical.html">
						Vertical					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - Search		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/search/users.html">
						Search Users					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/search/horizontal.html">
						Search Horizontal					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/search/vertical.html">
						Search Vertical					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="utilities/search/select-location.html">
						Search Location					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - Widgets		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="widgets/charts.html">
						Charts					</a>



					<a class="fw-6 fw-semibold" href="widgets/feeds.html">
						Feeds					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="widgets/lists.html">
						Lists					</a>



					<a class="fw-6 fw-semibold" href="widgets/mixed.html">
						Mixed					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="widgets/statistics.html">
						Statistics					</a>



					<a class="fw-6 fw-semibold" href="widgets/tables.html">
						Tables					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - Email Templates		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="authentication/email/welcome-message.html">
						Welcome					</a>



					<a class="fw-6 fw-semibold" href="authentication/email/subscription-confirmed.html">
						Subscription Confirmed					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="authentication/email/reset-password.html">
						Reset Password					</a>



					<a class="fw-6 fw-semibold" href="authentication/email/card-declined.html">
						Card Declined					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="authentication/email/promo-1.html">
						Promotion 1					</a>



					<a class="fw-6 fw-semibold" href="authentication/email/promo-2.html">
						Promotion 2					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="authentication/email/promo-3.html">
						Promotion 3					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - General - User Profile		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/user-profile/overview.html">
						Profile Overview					</a>



					<a class="fw-6 fw-semibold" href="pages/user-profile/projects.html">
						User Projects					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/user-profile/campaigns.html">
						User Campaigns					</a>



					<a class="fw-6 fw-semibold" href="pages/user-profile/documents.html">
						User Documents					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/user-profile/followers.html">
						User Followers					</a>



					<a class="fw-6 fw-semibold" href="pages/user-profile/activity.html">
						User Activity					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - General - Corporate		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/about.html">
						About Us					</a>



					<a class="fw-6 fw-semibold" href="pages/contact.html">
						Contact Us					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/licenses.html">
						License					</a>



					<a class="fw-6 fw-semibold" href="pages/team.html">
						Our Team					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/sitemap.html">
						Sitemap					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - General - Social		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/social/feeds.html">
						Activity					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/social/activity.html">
						Feeds					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/social/followers.html">
						Followers					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/social/settings.html">
						Settings					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->
	<!-- Section -->
	<div class="mb-10 mb-lg-17">
		<!-- Title -->
		<h3 class="text-dark fw-bolder mb-7">
			Pages - General - Others		</h3>
		<!--// Title -->

		<!-- Row -->
		<div class="row">

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/faq/classic.html">
						FAQ Classic					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/faq/extended.html">
						FAQ Extended					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/blog/home.html">
						Blog Home					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->

									<!-- Col -->
					<div class="col-lg-3">
						<!-- List -->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="pages/blog/post.html">
						Blog Post					</a>

																</div>
						<!--// List -->
					</div>
					<!--// Col -->
									</div>
		<!--// Row -->
	</div>
	<!--// Section -->



								<!-- Section -->
			<div class="">

<!-- Title -->
<h3 class="text-dark fw-bolder mb-7">
	Apps
</h3>
<!--// Title -->

<!-- Row -->
<div class="row">

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="apps/projects/list/list.html">
				Projects			</a>



			<a class="fw-6 fw-semibold" href="apps/ecommerce/catalog/products/products.html">
				Ecommerce			</a>



			<a class="fw-6 fw-semibold" href="apps/customers/list/list.html">
				Customers			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="apps/subscriptions/list/list.html">
				Subscriptions			</a>



			<a class="fw-6 fw-semibold" href="apps/user-management/users/list/list.html">
				User Management			</a>



			<a class="fw-6 fw-semibold" href="apps/invoices/create/main.html">
				Invoices			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="apps/support-center/overview/main.html">
				Support Center			</a>



			<a class="fw-6 fw-semibold" href="apps/chat/private.html">
				Chat			</a>



			<a class="fw-6 fw-semibold" href="apps/calendar/calendar.html">
				Calendar			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->

					<!-- Col -->
			<div class="col-lg-3">
				<!-- List -->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="apps/file-manager/list/folders.html">
				File Manager			</a>



			<a class="fw-6 fw-semibold" href="apps/inbox/listing/listing.html">
				Inbox			</a>



			<a class="fw-6 fw-semibold" href="apps/contacts/getting-started.html">
				Contacts			</a>

										</div>
				<!--// List -->
			</div>
			<!--// Col -->
			</div>
<!--// Row -->

			</div>
			<!--// Section -->



			</div>
	<!--// Wrapper -->
</div>
<!--// Text view- -->                </div>
            </div>
            <!--// Modal body -->
        </div>
        <!--// Modal content -->
    </div>
    <!--// Modal dialog -->
</div>
<!--// Modal - Sitemap -->				<!--// Engage modals -->
<!-- Scrolltop -->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i></div>
<!--// Scrolltop -->

                    <!-- Modals -->

<!-- Modal - Upgrade plan -->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!-- Modal dialog -->
    <div class="modal-dialog modal-xl">
        <!-- Modal content -->
        <div class="modal-content rounded">
            <!-- Modal header -->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!-- Close -->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--// Close -->
            </div>
            <!--// Modal header -->

            <!-- Modal body -->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!-- Heading -->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Upgrade a Plan</h1>

                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                    </div>
                </div>
                <!--// Heading -->

                <!-- Plans -->
                <div class="d-flex flex-column">
                    <!-- Nav group -->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">
                            Monthly
                        </button>
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">
                            Annual
                        </button>
                    </div>
                    <!--// Nav group -->

                    <!-- Row -->
                    <div class="row mt-10">
                        <!-- Col -->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!-- Tabs -->
                            <div class="nav flex-column">
                                                                    <!-- Tab link -->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

                                        <!--// Description -->
                                        <div class="d-flex align-items-center me-2">
                                            <!-- Radio -->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup">
                                            </div>
                                            <!--// Radio -->

                                            <!-- Info -->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups                                                </div>
                                            </div>
                                            <!--// Info -->
                                        </div>
                                        <!--// Description -->

                                        <!-- Price -->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                                    39                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--// Price -->
                                    </label>
                                    <!--// Tab link -->
                                                                    <!-- Tab link -->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

                                        <!--// Description -->
                                        <div class="d-flex align-items-center me-2">
                                            <!-- Radio -->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="advanced">
                                            </div>
                                            <!--// Radio -->

                                            <!-- Info -->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size                                                </div>
                                            </div>
                                            <!--// Info -->
                                        </div>
                                        <!--// Description -->

                                        <!-- Price -->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">
                                                    339                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--// Price -->
                                    </label>
                                    <!--// Tab link -->
                                                                    <!-- Tab link -->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

                                        <!--// Description -->
                                        <div class="d-flex align-items-center me-2">
                                            <!-- Radio -->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="enterprise">
                                            </div>
                                            <!--// Radio -->

                                            <!-- Info -->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                                                                            <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team                                                </div>
                                            </div>
                                            <!--// Info -->
                                        </div>
                                        <!--// Description -->

                                        <!-- Price -->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                    999                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--// Price -->
                                    </label>
                                    <!--// Tab link -->
                                                                    <!-- Tab link -->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

                                        <!--// Description -->
                                        <div class="d-flex align-items-center me-2">
                                            <!-- Radio -->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="custom">
                                            </div>
                                            <!--// Radio -->

                                            <!-- Info -->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license                                                </div>
                                            </div>
                                            <!--// Info -->
                                        </div>
                                        <!--// Description -->

                                        <!-- Price -->
                                        <div class="ms-5">
                                                                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                                                                    </div>
                                        <!--// Price -->
                                    </label>
                                    <!--// Tab link -->
                                                            </div>
                            <!--// Tabs -->
                        </div>
                        <!--// Col -->

                        <!-- Col -->
                        <div class="col-lg-6">
                            <!-- Tab content -->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                                                    <!-- Tab Pane -->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!-- Heading -->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--// Heading -->

                                        <!-- Body -->
                                        <div class="pt-1">
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                    </div>
                                        <!--// Body -->
                                    </div>
                                    <!--// Tab Pane -->
                                                                    <!-- Tab Pane -->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!-- Heading -->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--// Heading -->

                                        <!-- Body -->
                                        <div class="pt-1">
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                    </div>
                                        <!--// Body -->
                                    </div>
                                    <!--// Tab Pane -->
                                                                    <!-- Tab Pane -->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!-- Heading -->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <!--// Heading -->

                                        <!-- Body -->
                                        <div class="pt-1">
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                    </div>
                                        <!--// Body -->
                                    </div>
                                    <!--// Tab Pane -->
                                                                    <!-- Tab Pane -->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!-- Heading -->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--// Heading -->

                                        <!-- Body -->
                                        <div class="pt-1">
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                            <!-- Item -->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--// Item -->
                                                                                    </div>
                                        <!--// Body -->
                                    </div>
                                    <!--// Tab Pane -->
                                                            </div>
                            <!--// Tab content -->
                        </div>
                        <!--// Col -->
                    </div>
                    <!--// Row -->
                </div>
                <!--// Plans -->

                <!-- Actions -->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

<!-- Indicator label -->
<span class="indicator-label">
    Upgrade Plan</span>
<!--// Indicator label -->

<!-- Indicator progress -->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--// Indicator progress -->
                    </button>
                </div>
                <!--// Actions -->
            </div>
            <!--// Modal body -->
        </div>
        <!--// Modal content -->
    </div>
    <!--// Modal dialog -->
</div>
<!--// Modal - Upgrade plan --><!-- Modal - Create App -->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!-- Modal dialog -->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <!-- Modal title -->
                <h2>Create App</h2>
                <!--// Modal title -->

                <!-- Close -->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--// Close -->
            </div>
            <!--// Modal header -->

            <!-- Modal body -->
            <div class="modal-body py-lg-10 px-lg-10">
                <!-- Stepper -->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <!-- Aside -->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!-- Nav -->
                        <div class="stepper-nav ps-lg-10">
                            <!-- Step 1 -->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!-- Wrapper -->
                                <div class="stepper-wrapper">
                                    <!-- Icon -->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--// Icon -->

                                    <!-- Label -->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Details
                                        </h3>

                                        <div class="stepper-desc">
                                            Name your App
                                        </div>
                                    </div>
                                    <!--// Label -->
                                </div>
                                <!--// Wrapper -->

                                <!-- Line -->
                                <div class="stepper-line h-40px"></div>
                                <!--// Line -->
                            </div>
                            <!--// Step 1 -->

                            <!-- Step 2 -->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!-- Wrapper -->
                                <div class="stepper-wrapper">
                                    <!-- Icon -->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!-- Icon -->

                                    <!-- Label -->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Frameworks
                                        </h3>

                                        <div class="stepper-desc">
                                            Define your app framework
                                        </div>
                                    </div>
                                    <!-- Label -->
                                </div>
                                <!--// Wrapper -->

                                <!-- Line -->
                                <div class="stepper-line h-40px"></div>
                                <!--// Line -->
                            </div>
                            <!--// Step 2 -->

                            <!-- Step 3 -->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!-- Wrapper -->
                                <div class="stepper-wrapper">
                                    <!-- Icon -->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--// Icon -->

                                    <!-- Label -->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Database
                                        </h3>

                                        <div class="stepper-desc">
                                            Select the app database type
                                        </div>
                                    </div>
                                    <!--// Label -->
                                </div>
                                <!--// Wrapper -->

                                <!-- Line -->
                                <div class="stepper-line h-40px"></div>
                                <!--// Line -->
                            </div>
                            <!--// Step 3 -->

                            <!-- Step 4 -->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!-- Wrapper -->
                                <div class="stepper-wrapper">
                                    <!-- Icon -->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--// Icon -->

                                    <!-- Label -->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Billing
                                        </h3>

                                        <div class="stepper-desc">
                                            Provide payment details
                                        </div>
                                    </div>
                                    <!--// Label -->
                                </div>
                                <!--// Wrapper -->

                                <!-- Line -->
                                <div class="stepper-line h-40px"></div>
                                <!--// Line -->
                            </div>
                            <!--// Step 4 -->

                            <!-- Step 5 -->
                            <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                <!-- Wrapper -->
                                <div class="stepper-wrapper">
                                    <!-- Icon -->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--// Icon -->

                                    <!-- Label -->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Completed
                                        </h3>

                                        <div class="stepper-desc">
                                            Review and Submit
                                        </div>
                                    </div>
                                    <!--// Label -->
                                </div>
                                <!--// Wrapper -->
                            </div>
                            <!--// Step 5 -->
                        </div>
                        <!--// Nav -->
                    </div>
                    <!-- Aside -->

                    <!-- Content -->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!-- Form -->
                        <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                            <!-- Step 1 -->
<div class="current" data-kt-stepper-element="content">
    <div class="w-100">
        <!-- Input group -->
        <div class="fv-row mb-10">
            <!-- Label -->
            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                <span class="required">App Name</span>


<span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--// Label -->

            <!-- Input -->
            <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="">
            <!--// Input -->
        </div>
        <!--// Input group -->

        <!-- Input group -->
        <div class="fv-row">
            <!-- Label -->
            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                <span class="required">Category</span>


<span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--// Label -->

            <!-- Options -->
            <div class="fv-row">
                <!-- Option -->
                <label class="d-flex flex-stack mb-5 cursor-pointer">
                    <!-- Label -->
                    <span class="d-flex align-items-center me-2">
                        <!-- Icon -->
                        <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-compass fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>                            </span>
                        </span>
                        <!--// Icon -->

                        <!-- Info -->
                        <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Quick Online Courses</span>

                            <span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
                        </span>
                        <!--// Info -->
                    </span>
                    <!--// Label -->

                    <!-- Input -->
                    <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="category" value="1">
                    </span>
                    <!--// Input -->
                </label>
                <!--// Option -->

                <!-- Option -->
                <label class="d-flex flex-stack mb-5 cursor-pointer">
                    <!-- Label -->
                    <span class="d-flex align-items-center me-2">
                        <!-- Icon -->
                        <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-danger  ">
                                <i class="ki-duotone ki-element-11 fs-1 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                            </span>
                        </span>
                        <!--// Icon -->

                        <!-- Info -->
                        <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Face to Face Discussions</span>

                            <span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
                        </span>
                        <!--// Info -->
                    </span>
                    <!--// Label -->

                    <!-- Input -->
                    <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="category" value="2">
                    </span>
                    <!--// Input -->
                </label>
                <!--// Option -->

                <!-- Option -->
                <label class="d-flex flex-stack cursor-pointer">
                    <!-- Label -->
                    <span class="d-flex align-items-center me-2">
                        <!-- Icon -->
                        <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-success">
                                <i class="ki-duotone ki-timer fs-1 text-success"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                            </span>
                        </span>
                        <!--// Icon -->

                        <!-- Info -->
                        <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Full Intro Training</span>

                            <span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
                        </span>
                        <!--// Info -->
                    </span>
                    <!--// Label -->

                    <!-- Input -->
                    <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="category" value="3">
                    </span>
                    <!--// Input -->
                </label>
                <!--// Option -->
            </div>
            <!--// Options -->
        </div>
        <!--// Input group -->
    </div>
</div>
<!--// Step 1 -->
                            <!-- Step 2 -->
<div data-kt-stepper-element="content">
    <div class="w-100">
        <!-- Input group -->
        <div class="fv-row">
            <!-- Label -->
            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                <span class="required">Select Framework</span>


<span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--// Label -->

            <!-- Option -->
            <label class="d-flex flex-stack cursor-pointer mb-5">
                <!-- Label -->
                <span class="d-flex align-items-center me-2">
                    <!-- Icon -->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-warning">
                            <i class="ki-duotone ki-html fs-2x text-warning"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </span>
                    <!--// Icon -->

                    <!-- Info -->
                    <span class="d-flex flex-column">
                        <span class="fw-bold fs-6">HTML5</span>

                        <span class="fs-7 text-muted">Base Web Projec</span>
                    </span>
                    <!--// Info -->
                </span>
                <!--// Label -->

                <!-- Input -->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" checked="" name="framework" value="1">
                </span>
                <!--// Input -->
            </label>
            <!--// Option -->

            <!-- Option -->
            <label class="d-flex flex-stack cursor-pointer mb-5">
                <!-- Label -->
                <span class="d-flex align-items-center me-2">
                    <!-- Icon -->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-success">
                            <i class="ki-duotone ki-react fs-2x text-success"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </span>
                    <!--// Icon -->

                    <!-- Info -->
                    <span class="d-flex flex-column">
                        <span class="fw-bold fs-6">ReactJS</span>
                        <span class="fs-7 text-muted">Robust and flexible app framework</span>
                    </span>
                    <!--// Info -->
                </span>
                <!--// Label -->

                <!-- Input -->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="framework" value="2">
                </span>
                <!--// Input -->
            </label>
            <!--// Option -->

            <!-- Option -->
            <label class="d-flex flex-stack cursor-pointer mb-5">
                <!-- Label -->
                <span class="d-flex align-items-center me-2">
                    <!-- Icon -->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-danger">
                            <i class="ki-duotone ki-angular fs-2x text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        </span>
                    </span>
                    <!--// Icon -->

                    <!-- Info -->
                    <span class="d-flex flex-column">
                        <span class="fw-bold fs-6">Angular</span>
                        <span class="fs-7 text-muted">Powerful data mangement</span>
                    </span>
                    <!--// Info -->
                </span>
                <!--// Label -->

                <!-- Input -->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="framework" value="3">
                </span>
                <!--// Input -->
            </label>
            <!--// Option -->

            <!-- Option -->
            <label class="d-flex flex-stack cursor-pointer">
                <!-- Label -->
                <span class="d-flex align-items-center me-2">
                    <!-- Icon -->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-vue fs-2x text-primary"><span class="path1"></span><span class="path2"></span></i>                        </span>
                    </span>
                    <!--// Icon -->

                    <!-- Info -->
                    <span class="d-flex flex-column">
                        <span class="fw-bold fs-6">Vue</span>
                        <span class="fs-7 text-muted">Lightweight and responsive framework</span>
                    </span>
                    <!--// Info -->
                </span>
                <!--// Label -->

                <!-- Input -->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="framework" value="4">
                </span>
                <!--// Input -->
            </label>
            <!--// Option -->
        </div>
        <!--// Input group -->
    </div>
</div>
<!--// Step 2 -->
                            <!-- Step 3 -->
<div data-kt-stepper-element="content">
    <div class="w-100">
        <!-- Input group -->
        <div class="fv-row mb-10">
            <!-- Label -->
            <label class="required fs-5 fw-semibold mb-2">
                Database Name
            </label>
            <!--// Label -->

            <!-- Input -->
            <input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db">
            <!--// Input -->
        </div>
        <!--// Input group -->

        <!-- Input group -->
        <div class="fv-row">
            <!-- Label -->
            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                <span class="required">Select Database Engine</span>


<span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--// Label -->

            <!-- Option -->
            <label class="d-flex flex-stack cursor-pointer mb-5">
                <!-- Label -->
                <span class="d-flex align-items-center me-2">
                    <!-- Icon -->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-success">
                            <i class="ki-duotone ki-note text-success fs-2x"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </span>
                    <!--// Icon -->

                    <!-- Info -->
                    <span class="d-flex flex-column">
                        <span class="fw-bold fs-6">MySQL</span>

                        <span class="fs-7 text-muted">Basic MySQL database</span>
                    </span>
                    <!--// Info -->
                </span>
                <!--// Label -->

                <!-- Input -->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="dbengine" checked="" value="1">
                </span>
                <!--// Input -->
            </label>
            <!--// Option -->

            <!-- Option -->
            <label class="d-flex flex-stack cursor-pointer mb-5">
                <!-- Label -->
                <span class="d-flex align-items-center me-2">
                    <!-- Icon -->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-danger">
                            <i class="ki-duotone ki-google text-danger fs-2x"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </span>
                    <!--// Icon -->

                    <!-- Info -->
                    <span class="d-flex flex-column">
                        <span class="fw-bold fs-6">Firebase</span>

                        <span class="fs-7 text-muted">Google based app data management</span>
                    </span>
                    <!--// Info -->
                </span>
                <!--// Label -->

                <!-- Input -->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="dbengine" value="2">
                </span>
                <!--// Input -->
            </label>
            <!--// Option -->

            <!-- Option -->
            <label class="d-flex flex-stack cursor-pointer">
                <!-- Label -->
                <span class="d-flex align-items-center me-2">
                    <!-- Icon -->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-warning">
                            <i class="ki-duotone ki-microsoft text-warning fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </span>
                    </span>
                    <!--// Icon -->

                    <!-- Info -->
                    <span class="d-flex flex-column">
                        <span class="fw-bold fs-6">DynamoDB</span>

                        <span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
                    </span>
                    <!--// Info -->
                </span>
                <!--// Label -->

                <!-- Input -->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="dbengine" value="3">
                </span>
                <!--// Input -->
            </label>
            <!--// Option -->
        </div>
        <!--// Input group -->
    </div>
</div>
<!--// Step 3 -->
                            <!-- Step 4 -->
<div data-kt-stepper-element="content">
    <div class="w-100">
        <!-- Input group -->
<div class="d-flex flex-column mb-7 fv-row">
    <!-- Label -->
    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
        <span class="required">Name On Card</span>


<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>    </label>
    <!--// Label -->

    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
</div>
<!--// Input group -->

<!-- Input group -->
<div class="d-flex flex-column mb-7 fv-row">
    <!-- Label -->
    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
    <!--// Label -->

    <!-- Input wrapper -->
    <div class="position-relative">
        <!-- Input -->
        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
        <!--// Input -->

        <!-- Card logos -->
        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
            <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px">
            <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px">
            <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px">
        </div>
        <!--// Card logos -->
    </div>
    <!--// Input wrapper -->
</div>
<!--// Input group -->

<!-- Input group -->
<div class="row mb-10">
    <!-- Col -->
    <div class="col-md-8 fv-row">
        <!-- Label -->
        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
        <!--// Label -->

        <!-- Row -->
        <div class="row fv-row">
            <!-- Col -->
            <div class="col-6">
                <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                    <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                    </select>
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-6">
                <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                    <option></option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2031">2031</option>
                                            <option value="2032">2032</option>
                                            <option value="2033">2033</option>
                                    </select>
            </div>
            <!--// Col -->
        </div>
        <!--// Row -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-md-4 fv-row">
        <!-- Label -->
        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
            <span class="required">CVV</span>


<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        </label>
        <!--// Label -->

        <!-- Input wrapper -->
        <div class="position-relative">
            <!-- Input -->
            <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
            <!--// Input -->

            <!-- CVV icon -->
            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span class="path2"></span></i>            </div>
            <!--// CVV icon -->
        </div>
        <!--// Input wrapper -->
    </div>
    <!--// Col -->
</div>
<!--// Input group -->

<!-- Input group -->
<div class="d-flex flex-stack">
    <!-- Label -->
    <div class="me-5">
        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
    </div>
    <!--// Label -->

    <!-- Switch -->
    <label class="form-check form-switch form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" value="1" checked="checked">
        <span class="form-check-label fw-semibold text-muted">
            Save Card
        </span>
    </label>
    <!--// Switch -->
</div>
<!--// Input group -->

    </div>
</div>
<!--// Step 4 -->
                            <!-- Step 5 -->
<div data-kt-stepper-element="content">
    <div class="w-100 text-center">
        <!-- Heading -->
           <h1 class="fw-bold text-dark mb-3">Release!</h1>
        <!--// Heading -->

        <!-- Description -->
        <div class="text-muted fw-semibold fs-3">
            Submit your app to kickstart your project.
        </div>
        <!--// Description -->

        <!-- Illustration -->
        <div class="text-center px-4 py-15">
            <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px">
        </div>
        <!--// Illustration -->
    </div>
</div>
<!--// Step 5 -->


                            <!-- Actions -->
                            <div class="d-flex flex-stack pt-10">
                                <!-- Wrapper -->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                        <i class="ki-duotone ki-arrow-left fs-3 me-1"><span class="path1"></span><span class="path2"></span></i>                                        Back
                                    </button>
                                </div>
                                <!--// Wrapper -->

                                <!-- Wrapper -->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span class="path2"></span></i>                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                        Continue
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span class="path1"></span><span class="path2"></span></i>                                    </button>
                                </div>
                                <!--// Wrapper -->
                            </div>
                            <!--// Actions -->
                        </form>
                        <!--// Form -->
                    </div>
                    <!--// Content -->
                </div>
                <!--// Stepper -->
            </div>
            <!--// Modal body -->
        </div>
        <!--// Modal content -->
    </div>
    <!--// Modal dialog -->
</div>
<!--// Modal - Create App --><!-- Modal - Users Search -->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!-- Modal dialog -->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!-- Close -->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--// Close -->
            </div>
            <!-- Modal header -->

            <!-- Modal body -->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!-- Content -->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>

                    <div class="text-muted fw-semibold fs-5">
                        Invite Collaborators To Your Project
                    </div>
                </div>
                <!--// Content -->

                <!-- Search -->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">

                    <!-- Form -->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!-- Hidden input(Added to disable form autocomplete) -->
                        <input type="hidden">
                        <!--// Hidden input -->

                        <!-- Icon -->
                        <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i>                        <!--// Icon -->

                        <!-- Input -->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input">
                        <!--// Input -->

                        <!-- Spinner -->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--// Spinner -->

                        <!-- Reset -->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i>                        </span>
                        <!--// Reset -->
                    </form>
                    <!--// Form -->

                    <!-- Wrapper -->
                    <div class="py-5">
                        <!-- Suggestions -->
<div data-kt-search-element="suggestions">
    <!-- Heading -->
    <h3 class="fw-semibold mb-5">Recently searched:</h3>
    <!--// Heading -->

    <!-- Users -->
    <div class="mh-375px scroll-y me-n7 pe-7">
                                <!-- User -->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!-- Avatar -->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                                    </div>
                <!--// Avatar -->

                <!-- Info -->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                    <span class="badge badge-light">Art Director</span>
                </div>
                <!--// Info -->
            </a>
            <!--// User -->
                                <!-- User -->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!-- Avatar -->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                            M                        </span>
                                    </div>
                <!--// Avatar -->

                <!-- Info -->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                    <span class="badge badge-light">Marketing Analytic</span>
                </div>
                <!--// Info -->
            </a>
            <!--// User -->
                                <!-- User -->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!-- Avatar -->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                    </div>
                <!--// Avatar -->

                <!-- Info -->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                    <span class="badge badge-light">Software Enginer</span>
                </div>
                <!--// Info -->
            </a>
            <!--// User -->
                                <!-- User -->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!-- Avatar -->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                    </div>
                <!--// Avatar -->

                <!-- Info -->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                    <span class="badge badge-light">Web Developer</span>
                </div>
                <!--// Info -->
            </a>
            <!--// User -->
                                <!-- User -->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!-- Avatar -->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                    </div>
                <!--// Avatar -->

                <!-- Info -->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                    <span class="badge badge-light">UI/UX Designer</span>
                </div>
                <!--// Info -->
            </a>
            <!--// User -->
            </div>
    <!--// Users -->
</div>
<!--// Suggestions -->

<!-- Results(add d-none to below element to hide the users list by default) -->
<div data-kt-search-element="results" class="d-none">
    <!-- Users -->
    <div class="mh-375px scroll-y me-n7 pe-7">
                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                        <div class="fw-semibold text-muted">max@kt.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                C                            </span>
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                        <div class="fw-semibold text-muted">mik@pex.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-9.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                O                            </span>
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                N                            </span>
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                E                            </span>
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                A                            </span>
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                        <div class="fw-semibold text-muted">robert@benko.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-13.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                L                            </span>
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-21.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->

                            <!-- Separator -->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--// Separator -->

                                <!-- User -->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                <!-- Details -->
                <div class="d-flex align-items-center">
                    <!-- Checkbox -->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16">
                    </label>
                    <!--// Checkbox -->

                    <!-- Avatar -->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                            </div>
                    <!--// Avatar -->

                    <!-- Details -->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--// Details -->
                </div>
                <!--// Details -->

                <!-- Access menu -->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="">Can Edit</option>
                    </select>
                </div>
                <!--// Access menu -->
            </div>
            <!--// User -->


            </div>
    <!--// Users -->

    <!-- Actions -->
    <div class="d-flex flex-center mt-15">
        <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
            Cancel
        </button>

        <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
            Add Selected Users
        </button>
    </div>
    <!--// Actions -->
</div>
<!--// Results -->
                        <!-- Empty -->
<div data-kt-search-element="empty" class="text-center d-none">
    <!-- Message -->
    <div class="fw-semibold py-10">
        <div class="text-gray-600 fs-3 mb-2">No users found</div>

        <div class="text-muted fs-6">Try to search by username, full name or email...</div>
    </div>
    <!--// Message -->

    <!-- Illustration -->
    <div class="text-center px-5">
        <img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px">
    </div>
    <!--// Illustration -->
</div>
<!--// Empty -->                    </div>
                    <!--// Wrapper -->
                </div>
                <!--// Search -->
            </div>
            <!--// Modal body -->
        </div>
        <!--// Modal content -->
    </div>
    <!--// Modal dialog -->
</div>
<!--// Modal - Users Search -->
<!-- Modal - Invite Friends -->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!-- Modal dialog -->
    <div class="modal-dialog mw-650px">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!-- Close -->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--// Close -->
            </div>
            <!-- Modal header -->

            <!-- Modal body -->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!-- Heading -->
                <div class="text-center mb-13">
                    <!-- Title -->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--// Title -->

                    <!-- Description -->
                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                    </div>
                    <!--// Description -->
                </div>
                <!--// Heading -->

                <!-- Google Contacts Invite -->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3">
                    Invite Gmail Contacts
                </div>
                <!--// Google Contacts Invite -->

                <!-- Separator -->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                </div>
                <!--// Separator -->

                <!-- Textarea -->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                </textarea>
                <!--// Textarea -->

                <!-- Users -->
                <div class="mb-10">
                    <!-- Heading -->
                    <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                    <!--// Heading -->

                    <!-- List -->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M                                            </span>
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                C                                            </span>
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-9.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                O                                            </span>
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                N                                            </span>
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                E                                            </span>
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A                                            </span>
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-13.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                                L                                            </span>
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-21.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                                                                <!-- User -->
                            <div class="d-flex flex-stack py-4 ">
                                <!-- Details -->
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                                                            </div>
                                    <!--// Avatar -->

                                    <!-- Details -->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--// Details -->
                                </div>
                                <!--// Details -->

                                <!-- Access menu -->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--// Access menu -->
                            </div>
                            <!--// User -->
                                            </div>
                    <!--// List -->
                </div>
                <!--// Users -->

                <!-- Notice -->
                <div class="d-flex flex-stack">
                    <!-- Label -->
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--// Label -->

                    <!-- Switch -->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked">

                        <span class="form-check-label fw-semibold text-muted">
                            Allowed
                        </span>
                    </label>
                    <!--// Switch -->
                </div>
                <!--// Notice -->
            </div>
            <!--// Modal body -->
        </div>
        <!--// Modal content -->
    </div>
    <!--// Modal dialog -->
</div>
<!--// Modal - Invite Friend -->            <!--// Modals -->

        <!-- Javascript -->
        <script>
            var hostUrl = "/metronic8/demo1/assets/";        </script>

                    <!-- Global Javascript Bundle(mandatory for all pages) -->
                            <script src="assets/plugins/global/plugins.bundle.js"></script>
                            <script src="assets/js/scripts.bundle.js"></script>
                        <!--// Global Javascript Bundle -->

                    <!-- Vendors Javascript(used for this page only) -->
                            <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
                        <!--// Vendors Javascript -->

                    <!-- Custom Javascript(used for this page only) -->
                            <script src="assets/js/custom/layout-builder/layout-builder.js"></script>
                            <script src="assets/js/widgets.bundle.js"></script>
                            <script src="assets/js/custom/widgets.js"></script>
                            <script src="assets/js/custom/apps/chat/chat.js"></script>
                            <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
                            <script src="assets/js/custom/utilities/modals/create-app.js"></script>
                            <script src="assets/js/custom/utilities/modals/users-search.js"></script>
                        <!--// Custom Javascript -->
                <!--// Javascript -->

            </body>
    <!--// Body -->
</html>