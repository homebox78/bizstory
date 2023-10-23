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
    <body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
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

        <!-- Root -->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!-- Header Section -->
<div class="mb-0" id="home">
    <!-- Wrapper -->
    <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
        <!-- Header -->
<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">

    <!-- Container -->
    <div class="container">
        <!-- Wrapper -->
        <div class="d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="d-flex align-items-center flex-equal">
                <!-- Mobile menu toggle -->
                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2hx"><span class="path1"></span><span class="path2"></span></i>                </button>
                <!--// Mobile menu toggle -->

                <!-- Logo image -->
                <a href="landing.html">
                    <img alt="Logo" src="assets/media/logos/landing.svg" class="logo-default h-25px h-lg-30px">
                    <img alt="Logo" src="assets/media/logos/landing-dark.svg" class="logo-sticky h-20px h-lg-25px">
                </a>
                <!--// Logo image -->
            </div>
            <!--// Logo -->

            <!-- Menu wrapper -->
            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">

                    <!-- Menu -->
                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
                                                <!-- Menu item -->
                        <div class="menu-item">
                            <!-- Menu link -->
                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Home                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                                <!-- Menu item -->
                        <div class="menu-item">
                            <!-- Menu link -->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#how-it-works" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                How it Works                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                                <!-- Menu item -->
                        <div class="menu-item">
                            <!-- Menu link -->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#achievements" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Achievements                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                                <!-- Menu item -->
                        <div class="menu-item">
                            <!-- Menu link -->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Team                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                                <!-- Menu item -->
                        <div class="menu-item">
                            <!-- Menu link -->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Portfolio                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                                <!-- Menu item -->
                        <div class="menu-item">
                            <!-- Menu link -->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Pricing                            </a>
                            <!--// Menu link -->
                        </div>
                        <!--// Menu item -->
                                            </div>
                    <!--// Menu -->
                </div>
            </div>
            <!--// Menu wrapper -->

            <!-- Toolbar -->
            <div class="flex-equal text-end ms-1">
                <a href="authentication/layouts/basic/sign-in.html" class="btn btn-success">Sign In</a>
            </div>
            <!--// Toolbar -->
        </div>
        <!--// Wrapper -->
    </div>
    <!--// Container -->
</div>
<!--// Header -->


<!-- Landing hero -->
<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
    <!-- Heading -->
    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
        <!-- Title -->
        <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
            Build An Outstanding Solutions <br>
            with

            <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                <span id="kt_landing_hero_text">The Best Theme Ever</span>
            </span>
        </h1>
        <!--// Title -->

        <!-- Action -->
        <a href="index.html" class="btn btn-primary">Try Metronic</a>
        <!--// Action -->
    </div>
    <!--// Heading -->

    <!-- Clients -->
    <div class="d-flex flex-center flex-wrap position-relative px-5">

            <!-- Client -->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
                <img src="assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px" alt="">
            </div>
            <!--// Client -->

            <!-- Client -->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
                <img src="assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px" alt="">
            </div>
            <!--// Client -->

            <!-- Client -->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
                <img src="assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px" alt="">
            </div>
            <!--// Client -->

            <!-- Client -->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
                <img src="assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px" alt="">
            </div>
            <!--// Client -->

            <!-- Client -->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
                <img src="assets/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px" alt="">
            </div>
            <!--// Client -->

            <!-- Client -->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="AON - Empower Results">
                <img src="assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px" alt="">
            </div>
            <!--// Client -->

            <!-- Client -->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
                <img src="assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px" alt="">
            </div>
            <!--// Client -->

            <!-- Client -->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
                <img src="assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px" alt="">
            </div>
            <!--// Client -->
            </div>
    <!--// Clients -->
</div>
<!--// Landing hero -->






    </div>
    <!--// Wrapper -->

    <!-- Curve bottom -->
<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
    <svg viewbox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
     </svg>
</div>
<!--// Curve bottom -->
</div>
<!--// Header Section -->

<!-- How It Works Section -->
<div class="mb-n10 mb-lg-n20 z-index-2">
    <!-- Container -->
    <div class="container">
        <!-- Heading -->
        <div class="text-center mb-17">
            <!-- Title -->
            <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">How it Works</h3>
            <!--// Title -->

            <!-- Text -->
            <div class="fs-5 text-muted fw-bold">
                Save  thousands to millions of bucks by using single tool <br>
                for different amazing and great useful admin
            </div>
            <!--// Text -->
        </div>
        <!--// Heading -->

        <!-- Row -->
        <div class="row w-100 gy-10 mb-md-20">
            <!-- Col -->
            <div class="col-md-4 px-5">
                <!-- Story -->
<div class="text-center mb-10 mb-md-0">
    <!-- Illustration -->
    <img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9" alt="">
    <!--// Illustration -->

    <!-- Heading -->
    <div class="d-flex flex-center mb-5">
        <!-- Badge -->
        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
        <!--// Badge -->

        <!-- Title -->
        <div class="fs-5 fs-lg-3 fw-bold text-dark">
            Jane Miller        </div>
        <!--// Title -->
    </div>
    <!--// Heading -->

    <!-- Description -->
    <div class="fw-semibold fs-6 fs-lg-4 text-muted">

                            Save  thousands to millions of bucks <br>
                            by using single tool for different <br>
                            amazing and great
                            </div>
    <!--// Description -->
</div>
<!--// Story -->



             </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-md-4 px-5">
                <!-- Story -->
<div class="text-center mb-10 mb-md-0">
    <!-- Illustration -->
    <img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9" alt="">
    <!--// Illustration -->

    <!-- Heading -->
    <div class="d-flex flex-center mb-5">
        <!-- Badge -->
        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
        <!--// Badge -->

        <!-- Title -->
        <div class="fs-5 fs-lg-3 fw-bold text-dark">
            Setup Your App        </div>
        <!--// Title -->
    </div>
    <!--// Heading -->

    <!-- Description -->
    <div class="fw-semibold fs-6 fs-lg-4 text-muted">

                            Save  thousands to millions of bucks <br>
                            by using single tool for different <br>
                            amazing and great
                            </div>
    <!--// Description -->
</div>
<!--// Story -->



             </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-md-4 px-5">
                <!-- Story -->
<div class="text-center mb-10 mb-md-0">
    <!-- Illustration -->
    <img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9" alt="">
    <!--// Illustration -->

    <!-- Heading -->
    <div class="d-flex flex-center mb-5">
        <!-- Badge -->
        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
        <!--// Badge -->

        <!-- Title -->
        <div class="fs-5 fs-lg-3 fw-bold text-dark">
            Enjoy Nautica App        </div>
        <!--// Title -->
    </div>
    <!--// Heading -->

    <!-- Description -->
    <div class="fw-semibold fs-6 fs-lg-4 text-muted">

                            Save  thousands to millions of bucks <br>
                            by using single tool for different <br>
                            amazing and great
                            </div>
    <!--// Description -->
</div>
<!--// Story -->



             </div>
            <!--// Col -->
        </div>
        <!--// Row -->


<!-- Product slider -->
<div class="tns tns-default">
    <!-- Slider -->
    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">

                    <!-- Item -->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="assets/media/preview/demos/demo1/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="">
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="assets/media/preview/demos/demo2/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="">
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="assets/media/preview/demos/demo4/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="">
            </div>
            <!--// Item -->
                    <!-- Item -->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="assets/media/preview/demos/demo5/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="">
            </div>
            <!--// Item -->

    </div>
    <!--// Slider -->

    <!-- Slider button -->
    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
        <i class="ki-duotone ki-left fs-2x"></i>    </button>
    <!--// Slider button -->

    <!-- Slider button -->
    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
        <i class="ki-duotone ki-right fs-2x"></i>    </button>
    <!--// Slider button -->
</div>
<!--// Product slider -->








    </div>
    <!--// Container -->
</div>
<!--// How It Works Section -->


<!-- Statistics Section -->
<div class="mt-sm-n10">
    <!-- Curve top -->
<div class="landing-curve landing-dark-color ">
    <svg viewbox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
    </svg>
</div>
<!--// Curve top -->

    <!-- Wrapper -->
    <div class="pb-15 pt-18 landing-dark-bg">
        <!-- Container -->
        <div class="container">
            <!-- Heading -->
            <div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
                <!-- Title -->
                <h3 class="fs-2hx text-white fw-bold mb-5">We Make Things Better</h3>
                <!--// Title -->

                <!-- Description -->
                <div class="fs-5 text-gray-700 fw-bold">
                    Save  thousands to millions of bucks by using single tool <br>
                    for different amazing and great useful admin
                </div>
                <!--// Description -->
            </div>
            <!--// Heading -->

            <!-- Statistics -->
            <div class="d-flex flex-center">
                <!-- Items -->
                <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">

                        <!-- Item -->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!-- Symbol -->
                            <i class="ki-duotone ki-element-11 fs-2tx text-white mb-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                            <!--// Symbol -->

                            <!-- Info -->
                            <div class="mb-0">
                                <!-- Value -->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700" data-kt-countup-suffix="+">0</div>
                                </div>
                                <!--// Value -->

                                <!-- Label -->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                    Known Companies                                </span>
                                <!--// Label -->
                            </div>
                            <!--// Info -->
                        </div>
                        <!--// Item -->

                        <!-- Item -->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!-- Symbol -->
                            <i class="ki-duotone ki-chart-pie-4 fs-2tx text-white mb-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                            <!--// Symbol -->

                            <!-- Info -->
                            <div class="mb-0">
                                <!-- Value -->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="80" data-kt-countup-suffix="K+">0</div>
                                </div>
                                <!--// Value -->

                                <!-- Label -->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                    Statistic Reports                                </span>
                                <!--// Label -->
                            </div>
                            <!--// Info -->
                        </div>
                        <!--// Item -->

                        <!-- Item -->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!-- Symbol -->
                            <i class="ki-duotone ki-basket fs-2tx text-white mb-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                            <!--// Symbol -->

                            <!-- Info -->
                            <div class="mb-0">
                                <!-- Value -->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="35" data-kt-countup-suffix="M+">0</div>
                                </div>
                                <!--// Value -->

                                <!-- Label -->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                    Secure Payments                                </span>
                                <!--// Label -->
                            </div>
                            <!--// Info -->
                        </div>
                        <!--// Item -->

                </div>
                <!--// Items -->
            </div>
            <!--// Statistics -->

            <!-- Testimonial -->
            <div class="fs-2 fw-semibold text-muted text-center mb-3">
                <span class="fs-1 lh-1 text-gray-700">“</span>

                When you care about your topic, you’ll write about it in a <br><span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way

                <span class="fs-1 lh-1 text-gray-700">“</span>
            </div>
            <!--// Testimonial -->

            <!-- Author -->
            <div class="fs-2 fw-semibold text-muted text-center">
                <a href="account/security.html" class="link-primary fs-4 fw-bold">Marcus Levy,</a>

                <span class="fs-4 fw-bold text-gray-600">KeenThemes CEO</span>
            </div>
            <!--// Author -->
        </div>
        <!--// Container -->
    </div>
    <!--// Wrapper -->

    <!-- Curve bottom -->
<div class="landing-curve landing-dark-color ">
    <svg viewbox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
     </svg>
</div>
<!--// Curve bottom -->
</div>
<!--// Statistics Section -->




<!-- Team Section -->
<div class="py-10 py-lg-20">
    <!-- Container -->
    <div class="container">
        <!-- Heading -->
        <div class="text-center mb-12">
            <!-- Title -->
            <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Our Great Team</h3>
            <!--// Title -->

            <!-- Sub-title -->
            <div class="fs-5 text-muted fw-bold">
                It’s no doubt that when a development takes longer to complete, additional costs to<br>
                integrate and test each extra feature creeps up and haunts most of us.
            </div>
            <!--// Sub-title- -->
        </div>
        <!--// Heading -->

        <!-- Slider -->
        <div class="tns tns-default" style="direction: ltr">
            <!-- Wrapper -->
            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">

                                    <!-- Item -->
                    <div class="text-center">
                        <!-- Photo -->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-1.jpg')">
                        </div>
                        <!--// Photo -->

                        <!-- Person -->
                        <div class="mb-0">
                            <!-- Name -->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Paul Miles</a>
                            <!--// Name -->

                            <!-- Position -->
                            <div class="text-muted fs-6 fw-semibold mt-1">Development Lead</div>
                            <!-- Position -->
                        </div>
                        <!--// Person -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="text-center">
                        <!-- Photo -->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-2.jpg')">
                        </div>
                        <!--// Photo -->

                        <!-- Person -->
                        <div class="mb-0">
                            <!-- Name -->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Melisa Marcus</a>
                            <!--// Name -->

                            <!-- Position -->
                            <div class="text-muted fs-6 fw-semibold mt-1">Creative Director</div>
                            <!-- Position -->
                        </div>
                        <!--// Person -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="text-center">
                        <!-- Photo -->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-5.jpg')">
                        </div>
                        <!--// Photo -->

                        <!-- Person -->
                        <div class="mb-0">
                            <!-- Name -->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">David Nilson</a>
                            <!--// Name -->

                            <!-- Position -->
                            <div class="text-muted fs-6 fw-semibold mt-1">Python Expert</div>
                            <!-- Position -->
                        </div>
                        <!--// Person -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="text-center">
                        <!-- Photo -->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-20.jpg')">
                        </div>
                        <!--// Photo -->

                        <!-- Person -->
                        <div class="mb-0">
                            <!-- Name -->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Anne Clarc</a>
                            <!--// Name -->

                            <!-- Position -->
                            <div class="text-muted fs-6 fw-semibold mt-1">Project Manager</div>
                            <!-- Position -->
                        </div>
                        <!--// Person -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="text-center">
                        <!-- Photo -->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-23.jpg')">
                        </div>
                        <!--// Photo -->

                        <!-- Person -->
                        <div class="mb-0">
                            <!-- Name -->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Ricky Hunt</a>
                            <!--// Name -->

                            <!-- Position -->
                            <div class="text-muted fs-6 fw-semibold mt-1">Art Director</div>
                            <!-- Position -->
                        </div>
                        <!--// Person -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="text-center">
                        <!-- Photo -->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-12.jpg')">
                        </div>
                        <!--// Photo -->

                        <!-- Person -->
                        <div class="mb-0">
                            <!-- Name -->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Alice Wayde</a>
                            <!--// Name -->

                            <!-- Position -->
                            <div class="text-muted fs-6 fw-semibold mt-1">Marketing Manager</div>
                            <!-- Position -->
                        </div>
                        <!--// Person -->
                    </div>
                    <!--// Item -->
                                    <!-- Item -->
                    <div class="text-center">
                        <!-- Photo -->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-9.jpg')">
                        </div>
                        <!--// Photo -->

                        <!-- Person -->
                        <div class="mb-0">
                            <!-- Name -->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Carles Puyol</a>
                            <!--// Name -->

                            <!-- Position -->
                            <div class="text-muted fs-6 fw-semibold mt-1">QA Managers</div>
                            <!-- Position -->
                        </div>
                        <!--// Person -->
                    </div>
                    <!--// Item -->

            </div>
            <!--// Wrapper -->

            <!-- Button -->
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                <i class="ki-duotone ki-left fs-2x"></i>            </button>
            <!--// Button -->

            <!-- Button -->
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                <i class="ki-duotone ki-right fs-2x"></i>            </button>
            <!--// Button -->
        </div>
        <!--// Slider -->
    </div>
    <!--// Container -->
</div>
<!--// Team Section -->


<!-- Projects Section -->
<div class="mb-lg-n15 position-relative z-index-2">
    <!-- Container -->
    <div class="container">
        <!-- Card -->
        <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
            <!-- Card body -->
            <div class="card-body p-lg-20">
                <!-- Heading -->
                <div class="text-center mb-5 mb-lg-10">
                    <!-- Title -->
                    <h3 class="fs-2hx text-dark mb-5" id="portfolio" data-kt-scroll-offset="{default: 100, lg: 250}">Our Projects</h3>
                    <!--// Title -->
                </div>
                <!--// Heading -->

                <!-- Tabs wrapper -->
                <div class="d-flex flex-center mb-5 mb-lg-15">
                    <!-- Tabs -->
                    <ul class="nav border-transparent flex-center fs-5 fw-bold">
                        <li class="nav-item">
							<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_latest">Latest</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">Web Design</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">Mobile Apps</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_development">Development</a>
						</li>
                    </ul>
                    <!--// Tabs -->
                </div>
                <!--// Tabs wrapper -->

                <!-- Tabs content -->
                <div class="tab-content">
                    <!-- Tab pane -->
                    <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                        <!-- Row -->
<div class="row g-10">
    <!-- Col -->
    <div class="col-lg-6">
        <!-- Item -->
        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-23.jpg">
            <!-- Image -->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-23.jpg')">
            </div>
            <!--// Image -->

            <!-- Action -->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
            <!--// Action -->
        </a>
        <!--// Item -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-6">
        <!-- Row -->
        <div class="row g-10 mb-10">
            <!-- Col -->
            <div class="col-lg-6">
                <!-- Item -->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">
                    <!-- Image -->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-22.jpg')">
                    </div>
                    <!--// Image -->

                    <!-- Action -->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </div>
                    <!--// Action -->
                </a>
                <!--// Item -->
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-6">
                <!-- Item -->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                    <!-- Image -->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')">
                    </div>
                    <!--// Image -->

                    <!-- Action -->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </div>
                    <!--// Action -->
                </a>
                <!--// Item -->
            </div>
            <!--// Col -->
        </div>
        <!--// Row -->

        <!-- Item -->
        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">
            <!-- Image -->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-20.jpg')">
            </div>
            <!--// Image -->

            <!-- Action -->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
            <!--// Action -->
        </a>
        <!--// Item -->
    </div>
    <!--// Col -->
</div>
<!--// Row -->
                    </div>
                    <!--// Tab pane -->

                    <!-- Tab pane -->
                    <div class="tab-pane fade" id="kt_landing_projects_web_design">
                        <!-- Row -->
<div class="row g-10">
    <!-- Col -->
    <div class="col-lg-6">
        <!-- Item -->
        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-11.jpg">
            <!-- Image -->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-11.jpg')">
            </div>
            <!--// Image -->

            <!-- Action -->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
            <!--// Action -->
        </a>
        <!--// Item -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-6">
        <!-- Row -->
        <div class="row g-10 mb-10">
            <!-- Col -->
            <div class="col-lg-6">
                <!-- Item -->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">
                    <!-- Image -->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-12.jpg')">
                    </div>
                    <!--// Image -->

                    <!-- Action -->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </div>
                    <!--// Action -->
                </a>
                <!--// Item -->
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-6">
                <!-- Item -->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                    <!-- Image -->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')">
                    </div>
                    <!--// Image -->

                    <!-- Action -->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </div>
                    <!--// Action -->
                </a>
                <!--// Item -->
            </div>
            <!--// Col -->
        </div>
        <!--// Row -->

        <!-- Item -->
        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">
            <!-- Image -->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-20.jpg')">
            </div>
            <!--// Image -->

            <!-- Action -->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
            <!--// Action -->
        </a>
        <!--// Item -->
    </div>
    <!--// Col -->
</div>
<!--// Row -->
                    </div>
                    <!--// Tab pane -->

                    <!-- Tab pane -->
                    <div class="tab-pane fade" id="kt_landing_projects_mobile_apps">
                        <!-- Row -->
<div class="row g-10">
    <!-- Col -->
    <div class="col-lg-6">
        <!-- Row -->
        <div class="row g-10 mb-10">
            <!-- Col -->
            <div class="col-lg-6">
                <!-- Item -->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-16.jpg">
                    <!-- Image -->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-16.jpg')">
                    </div>
                    <!--// Image -->

                    <!-- Action -->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </div>
                    <!--// Action -->
                </a>
                <!--// Item -->
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-6">
                <!-- Item -->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">
                    <!-- Image -->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-12.jpg')">
                    </div>
                    <!--// Image -->

                    <!-- Action -->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </div>
                    <!--// Action -->
                </a>
                <!--// Item -->
            </div>
            <!--// Col -->
        </div>
        <!--// Row -->

        <!-- Item -->
        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-15.jpg">
            <!-- Image -->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-15.jpg')">
            </div>
            <!--// Image -->

            <!-- Action -->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
            <!--// Action -->
        </a>
        <!--// Item -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-6">
        <!-- Item -->
        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-23.jpg">
            <!-- Image -->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-23.jpg')">
            </div>
            <!--// Image -->

            <!-- Action -->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
            <!--// Action -->
        </a>
        <!--// Item -->
    </div>
    <!--// Col -->
</div>
<!--// Row -->
                    </div>
                    <!--// Tab pane -->

                    <!-- Tab pane -->
                    <div class="tab-pane fade" id="kt_landing_projects_development">
                        <!-- Row -->
<div class="row g-10">
    <!-- Col -->
    <div class="col-lg-6">
        <!-- Item -->
        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-15.jpg">
            <!-- Image -->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-15.jpg')">
            </div>
            <!--// Image -->

            <!-- Action -->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
            <!--// Action -->
        </a>
        <!--// Item -->
    </div>
    <!--// Col -->

    <!-- Col -->
    <div class="col-lg-6">
        <!-- Row -->
        <div class="row g-10 mb-10">
            <!-- Col -->
            <div class="col-lg-6">
                <!-- Item -->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">
                    <!-- Image -->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-22.jpg')">
                    </div>
                    <!--// Image -->

                    <!-- Action -->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </div>
                    <!--// Action -->
                </a>
                <!--// Item -->
            </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-6">
                <!-- Item -->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                    <!-- Image -->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')">
                    </div>
                    <!--// Image -->

                    <!-- Action -->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </div>
                    <!--// Action -->
                </a>
                <!--// Item -->
            </div>
            <!--// Col -->
        </div>
        <!--// Row -->

        <!-- Item -->
        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-14.jpg">
            <!-- Image -->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-14.jpg')">
            </div>
            <!--// Image -->

            <!-- Action -->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </div>
            <!--// Action -->
        </a>
        <!--// Item -->
    </div>
    <!--// Col -->
</div>
<!--// Row -->
                    </div>
                    <!--// Tab pane -->
                </div>
                <!--// Tabs content -->
            </div>
            <!--// Card body -->
        </div>
        <!--// Card -->
    </div>
    <!--// Container -->
</div>
<!--// Projects Section -->


<!-- Pricing Section -->
<div class="mt-sm-n20 ">
    <!-- Curve top -->
<div class="landing-curve landing-dark-color ">
    <svg viewbox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
    </svg>
</div>
<!--// Curve top -->

    <!-- Wrapper -->
    <div class="py-20 landing-dark-bg ">
        <!-- Container -->
        <div class="container">
            <!-- Plans -->
            <div class="d-flex flex-column container pt-lg-20">
                <!-- Heading -->
                <div class="mb-13 text-center">
                    <h1 class="fs-2hx fw-bold text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">Clear Pricing Makes it Easy</h1>

                    <div class="text-gray-600 fw-semibold fs-5">
                        Save  thousands to millions of bucks by using single tool for different <br>
                        amazing and outstanding cool and great useful admin
                    </div>
                </div>
                <!--// Heading -->

                <!-- Pricing -->
                <div class="text-center" id="kt_pricing">
                    <!-- Nav group -->
                    <div class="nav-group landing-dark-bg d-inline-flex mb-15" data-kt-buttons="true" style="border: 1px dashed #2B4666;">
                        <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active" data-kt-plan="month">
                            Monthly
                        </a>

                        <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3" data-kt-plan="annual">
                            Annual
                        </a>
                    </div>
                    <!--// Nav group -->

                    <!-- Row -->
                    <div class="row g-10">
                                                                                    <!-- Col -->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!-- Option -->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                            <!-- Heading -->
                                            <div class="mb-7 text-center">
                                                <!-- Title -->
                                                <h1 class="text-dark mb-5 fw-boldest">Startup</h1>
                                                <!--// Title -->

                                                <!-- Description -->
                                                <div class="text-gray-400 fw-semibold mb-5">
                                                    Best Settings for Startups
                                                </div>
                                                <!--// Description -->

                                                <!-- Price -->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>

                                                    <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="99" data-kt-plan-price-annual="999">
                                                        99                                                    </span>

                                                    <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">
                                                        / Mon                                                    </span>
                                                </div>
                                                <!--// Price -->
                                            </div>
                                            <!--// Heading -->

                                            <!-- Features -->
                                            <div class="w-100 mb-10">
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Up to 10 Active Users                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Up to 30 Project Integrations                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800">
                                                                Keen Analytics Platform                                                            </span>
                                                            <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800">
                                                                Targets Timelines & Files                                                            </span>
                                                            <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack ">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800">
                                                                Unlimited Projects                                                            </span>
                                                            <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->

                                            </div>
                                            <!--// Features -->

                                            <!-- Select -->
                                            <a href="#" class="btn btn-primary">Select</a>
                                            <!--// Select -->
                                        </div>
                                        <!--// Option -->
                                    </div>
                                </div>
                                <!--// Col -->
                                                                                                                <!-- Col -->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!-- Option -->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-primary py-20 px-10">
                                            <!-- Heading -->
                                            <div class="mb-7 text-center">
                                                <!-- Title -->
                                                <h1 class="text-white mb-5 fw-boldest">Business</h1>
                                                <!--// Title -->

                                                <!-- Description -->
                                                <div class="text-white opacity-75 fw-semibold mb-5">
                                                    Best Settings for Business
                                                </div>
                                                <!--// Description -->

                                                <!-- Price -->
                                                <div class="text-center">
                                                    <span class="mb-2 text-white">$</span>

                                                    <span class="fs-3x fw-bold text-white" data-kt-plan-price-month="199" data-kt-plan-price-annual="1999">
                                                        199                                                    </span>

                                                    <span class="fs-7 fw-semibold text-white opacity-75" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">
                                                        / Mon                                                    </span>
                                                </div>
                                                <!--// Price -->
                                            </div>
                                            <!--// Heading -->

                                            <!-- Features -->
                                            <div class="w-100 mb-10">
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">
                                                                Up to 10 Active Users                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-white"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">
                                                                Up to 30 Project Integrations                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-white"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">
                                                                Keen Analytics Platform                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-white"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">
                                                                Targets Timelines & Files                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-white"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack ">
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75">
                                                                Unlimited Projects                                                            </span>
                                                            <i class="ki-duotone ki-cross-circle fs-1 text-white"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->

                                            </div>
                                            <!--// Features -->

                                            <!-- Select -->
                                            <a href="#" class="btn btn-color-primary btn-active-light-primary btn-light">Select</a>
                                            <!--// Select -->
                                        </div>
                                        <!--// Option -->
                                    </div>
                                </div>
                                <!--// Col -->
                                                                                                                <!-- Col -->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!-- Option -->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                            <!-- Heading -->
                                            <div class="mb-7 text-center">
                                                <!-- Title -->
                                                <h1 class="text-dark mb-5 fw-boldest">Enterprise</h1>
                                                <!--// Title -->

                                                <!-- Description -->
                                                <div class="text-gray-400 fw-semibold mb-5">
                                                    Best Settings for Enterprise
                                                </div>
                                                <!--// Description -->

                                                <!-- Price -->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>

                                                    <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                        999                                                    </span>

                                                    <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">
                                                        / Mon                                                    </span>
                                                </div>
                                                <!--// Price -->
                                            </div>
                                            <!--// Heading -->

                                            <!-- Features -->
                                            <div class="w-100 mb-10">
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Up to 10 Active Users                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Up to 30 Project Integrations                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Keen Analytics Platform                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack mb-5">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Targets Timelines & Files                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->
                                                                                                    <!-- Item -->
                                                    <div class="d-flex flex-stack ">
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Unlimited Projects                                                            </span>
                                                            <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--// Item -->

                                            </div>
                                            <!--// Features -->

                                            <!-- Select -->
                                            <a href="#" class="btn btn-primary">Select</a>
                                            <!--// Select -->
                                        </div>
                                        <!--// Option -->
                                    </div>
                                </div>
                                <!--// Col -->
                                                                        </div>
                    <!--// Row -->
                </div>
                <!--// Pricing -->
            </div>
            <!--// Plans -->
        </div>
        <!--// Container -->
    </div>
    <!--// Wrapper -->

    <!-- Curve bottom -->
<div class="landing-curve landing-dark-color ">
    <svg viewbox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
     </svg>
</div>
<!--// Curve bottom -->
</div>
<!--// Pricing Section -->



<!-- Testimonials Section -->
<div class="mt-20 mb-n20 position-relative z-index-2">
    <!-- Container -->
    <div class="container">
        <!-- Heading -->
        <div class="text-center mb-17">
            <!-- Title -->
            <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">What Our Clients Say</h3>
            <!--// Title -->

            <!-- Description -->
            <div class="fs-5 text-muted fw-bold">
                Save  thousands to millions of bucks by using single tool <br>
                for different amazing and great useful admin
            </div>
            <!--// Description -->
        </div>
        <!--// Heading -->

        <!-- Row -->
        <div class="row g-lg-10 mb-10 mb-lg-20">
            <!-- Col -->
            <div class="col-lg-4">
                <!-- Testimonial -->
<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
    <!-- Wrapper -->
    <div class="mb-7">
        <!-- Rating -->
        <div class="rating mb-6">
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                    </div>
        <!--// Rating -->

        <!-- Title -->
        <div class="fs-2 fw-bold text-dark mb-3">

                            This is by far the cleanest template <br>
                            and the most well structured
                                </div>
        <!--// Title -->

        <!-- Feedback -->
        <div class="text-gray-500 fw-semibold fs-4">

                            The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean.
                            In fact the cleanest and the most up to standard I have ever seen.
                                </div>
        <!--// Feedback -->
    </div>
    <!--// Wrapper -->

    <!-- Author -->
    <div class="d-flex align-items-center">
        <!-- Avatar -->
        <div class="symbol symbol-circle symbol-50px me-5">
            <img src="assets/media/avatars/300-1.jpg" class="" alt="">
        </div>
        <!--// Avatar -->

        <!-- Name -->
        <div class="flex-grow-1">
            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Paul Miles</a>

            <span class="text-muted d-block fw-bold">Development Lead</span>
        </div>
        <!--// Name -->
    </div>
    <!--// Author -->
</div>
<!--// Testimonial -->



             </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-4">
                <!-- Testimonial -->
<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
    <!-- Wrapper -->
    <div class="mb-7">
        <!-- Rating -->
        <div class="rating mb-6">
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                    </div>
        <!--// Rating -->

        <!-- Title -->
        <div class="fs-2 fw-bold text-dark mb-3">

                            This is by far the cleanest template <br>
                            and the most well structured
                                </div>
        <!--// Title -->

        <!-- Feedback -->
        <div class="text-gray-500 fw-semibold fs-4">

                            The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean.
                            In fact the cleanest and the most up to standard I have ever seen.
                                </div>
        <!--// Feedback -->
    </div>
    <!--// Wrapper -->

    <!-- Author -->
    <div class="d-flex align-items-center">
        <!-- Avatar -->
        <div class="symbol symbol-circle symbol-50px me-5">
            <img src="assets/media/avatars/300-2.jpg" class="" alt="">
        </div>
        <!--// Avatar -->

        <!-- Name -->
        <div class="flex-grow-1">
            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Janya Clebert</a>

            <span class="text-muted d-block fw-bold">Development Lead</span>
        </div>
        <!--// Name -->
    </div>
    <!--// Author -->
</div>
<!--// Testimonial -->



             </div>
            <!--// Col -->

            <!-- Col -->
            <div class="col-lg-4">
                <!-- Testimonial -->
<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
    <!-- Wrapper -->
    <div class="mb-7">
        <!-- Rating -->
        <div class="rating mb-6">
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>                </div>
                    </div>
        <!--// Rating -->

        <!-- Title -->
        <div class="fs-2 fw-bold text-dark mb-3">

                            This is by far the cleanest template <br>
                            and the most well structured
                                </div>
        <!--// Title -->

        <!-- Feedback -->
        <div class="text-gray-500 fw-semibold fs-4">

                            The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean.
                            In fact the cleanest and the most up to standard I have ever seen.
                                </div>
        <!--// Feedback -->
    </div>
    <!--// Wrapper -->

    <!-- Author -->
    <div class="d-flex align-items-center">
        <!-- Avatar -->
        <div class="symbol symbol-circle symbol-50px me-5">
            <img src="assets/media/avatars/300-16.jpg" class="" alt="">
        </div>
        <!--// Avatar -->

        <!-- Name -->
        <div class="flex-grow-1">
            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Steave Brown</a>

            <span class="text-muted d-block fw-bold">Development Lead</span>
        </div>
        <!--// Name -->
    </div>
    <!--// Author -->
</div>
<!--// Testimonial -->



             </div>
            <!--// Col -->
        </div>
        <!--// Row -->

        <!-- Highlight -->
        <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
            <!-- Content -->
            <div class="my-2 me-5">
                <!-- Title -->
                <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">
                    Start With Metronic Today,

                    <span class="fw-normal">Speed Up Development!</span>
                </div>
                <!--// Title -->

                <!-- Description -->
                <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">
                    Join over 100,000 Professionals Community to Stay Ahead
                </div>
                <!--// Description -->
            </div>
            <!--// Content -->

            <!-- Link -->
            <a href="https://1.envato.market/EA4JP" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on Themeforest</a>
            <!--// Link -->
        </div>
        <!--// Highlight -->
    </div>
    <!--// Container -->
</div>
<!--// Testimonials Section -->


<!-- Footer Section -->
<div class="mb-0">
    <!-- Curve top -->
<div class="landing-curve landing-dark-color ">
    <svg viewbox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
    </svg>
</div>
<!--// Curve top -->

    <!-- Wrapper -->
    <div class="landing-dark-bg pt-20">
        <!-- Container -->
<div class="container">
    <!-- Row -->
    <div class="row py-10 py-lg-20">
        <!-- Col -->
        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
            <!-- Block -->
            <div class="rounded landing-dark-border p-9 mb-10">
                <!-- Title -->
                <h2 class="text-white">Would you need a Custom License?</h2>
                <!--// Title -->

                <!-- Text -->
                <span class="fw-normal fs-4 text-gray-700">
                    Email us to

                    <a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a>
                </span>
                <!--// Text -->
            </div>
            <!--// Block -->

            <!-- Block -->
            <div class="rounded landing-dark-border p-9">
                <!-- Title -->
                <h2 class="text-white">How About a Custom Project?</h2>
                <!--// Title -->

                <!-- Text -->
                <span class="fw-normal fs-4 text-gray-700">
                    Use Our Custom Development Service.

                    <a href="pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a>
                </span>
                <!--// Text -->
            </div>
            <!--// Block -->
        </div>
        <!--// Col -->

        <!-- Col -->
        <div class="col-lg-6 ps-lg-16">
            <!-- Navs -->
            <div class="d-flex justify-content-center">
                <!-- Links -->
                <div class="d-flex fw-semibold flex-column me-20">
                    <!-- Subtitle -->
                    <h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
                    <!--// Subtitle -->

                    <!-- Link -->
                    <a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
                    <!--// Link -->
                </div>
                <!--// Links -->

                <!-- Links -->
                <div class="d-flex fw-semibold flex-column ms-lg-20">
                    <!-- Subtitle -->
                    <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                    <!--// Subtitle -->

                    <!-- Link -->
                    <a href="https://www.facebook.com/keenthemes" class="mb-6">
                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="">

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                    </a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="https://github.com/KeenthemesHub" class="mb-6">
                        <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="">

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                    </a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="https://twitter.com/keenthemes" class="mb-6">
                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="">

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                    </a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="https://dribbble.com/keenthemes" class="mb-6">
                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="">

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                    </a>
                    <!--// Link -->

                    <!-- Link -->
                    <a href="https://www.instagram.com/keenthemes" class="mb-6">
                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="">

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                    </a>
                    <!--// Link -->
                </div>
                <!--// Links -->
            </div>
            <!--// Navs -->
        </div>
        <!--// Col -->
    </div>
    <!--// Row -->
</div>
<!--// Container -->

        <!-- Separator -->
<div class="landing-dark-separator"></div>
<!--// Separator -->

<!-- Container -->
<div class="container">
    <!-- Wrapper -->
    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
        <!-- Copyright -->
        <div class="d-flex align-items-center order-2 order-md-1">
            <!-- Logo -->
            <a href="landing.html">
                <img alt="Logo" src="assets/media/logos/landing.svg" class="h-15px h-md-20px">
            </a>
            <!--// Logo image -->

            <!-- Logo image -->
            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://keenthemes.com">
                &copy; 2023 Keenthemes Inc.
            </span>
            <!--// Logo image -->
        </div>
        <!--// Copyright -->

        <!-- Menu -->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
            <li class="menu-item">
                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
            </li>

            <li class="menu-item mx-5">
                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
            </li>

            <li class="menu-item">
                <a href="" target="_blank" class="menu-link px-2">Purchase</a>
            </li>
        </ul>
        <!--// Menu -->
    </div>
    <!--// Wrapper -->
</div>
<!--// Container -->
    </div>
    <!--// Wrapper -->
</div>
 <!--// Footer Section -->

<!-- Scrolltop -->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i></div>
<!--// Scrolltop -->
</div>
<!--// Root -->
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


        <!-- Javascript -->
        <script>
            var hostUrl = "/metronic8/demo1/assets/";        </script>

                    <!-- Global Javascript Bundle(mandatory for all pages) -->
                            <script src="assets/plugins/global/plugins.bundle.js"></script>
                            <script src="assets/js/scripts.bundle.js"></script>
                        <!--// Global Javascript Bundle -->

                    <!-- Vendors Javascript(used for this page only) -->
                            <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
                            <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
                        <!--// Vendors Javascript -->

                    <!-- Custom Javascript(used for this page only) -->
                            <script src="assets/js/custom/landing.js"></script>
                            <script src="assets/js/custom/pages/pricing/general.js"></script>
                        <!--// Custom Javascript -->
                <!--// Javascript -->

            </body>
    <!--// Body -->
</html>