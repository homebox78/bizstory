<?php
	include_once("header.php");
?>
	<!-- Body -->
	<body id="kt_body" class="app-blank">
		<!-- Root -->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!-- Authentication - Sign-in  -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!-- Body -->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-3 p-lg-8 order-2 order-lg-1">
					<!-- Form -->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!-- Wrapper -->
						<div class="w-lg-400px p-3 p-lg-8">
							<!-- Form -->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="index.php" action="#">
								<!-- Heading -->
								<div class="text-center mb-11">
									<h1 class="text-dark fw-bolder mb-3">
										비즈스토리 <span class="fw-normal">로그인</span>
									</h1>
									<div class="text-gray-500 fs-7">
										사람의 가능성을 현실의 가치로 만드는 스마트 업무공간
									</div>
								</div>
								<!-- Heading -->

								<!-- Separator -->
								<div class="d-none d-lg-block">
									<div class="separator separator-content my-14">
										<img alt="Logo" src="assets/media/logos/default.svg" class="h-15px h-lg-20px">
									</div>
								</div>
								<!--// Separator -->

								<!-- Input group- -->
								<div class="fv-row mb-8">
									<input type="text" placeholder="이메일" name="email" autocomplete="off" class="form-control bg-transparent">
								</div>

								<div class="fv-row mb-3">
									<input type="password" placeholder="패스워드" name="password" autocomplete="off" class="form-control bg-transparent">
								</div>
								<!--// Input group- -->

								<!-- Wrapper -->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base mb-8">
									<div></div>
									<div>
										<a href="#" class="text-gray-700">
											<strong class="fw-semibold">아이디</strong> 찾기
										</a>
										<a href="#" class="text-gray-700 ms-2">
											<strong class="fw-semibold">비밀번호</strong> 찾기
										</a>
									</div>
								</div>
								<!--// Wrapper -->

								<!-- Submit button -->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-warning">
										<span class="indicator-label fw-bold">LOGIN</span>
										<span class="indicator-progress">
										기다리세요...<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
										</span>
									</button>
								</div>
								<!--// Submit button -->

								<!-- 데모신청 -->
								<div class="text-gray-500 text-center fs-7">
									언제 어디서나 스마트 업무 체험하기!
									<a href="#" class="link-danger fw-semibold ms-2">
										데모신청
									</a>
								</div>
								<!--// 데모신청 -->
							</form>
							<!--// Form -->
						</div>
						<!--// Wrapper -->
					</div>
					<!--// Form -->

					<!-- Footer -->
					<div class="w-lg-400px d-flex flex-stack px-3 px-lg-8 mx-auto">
						<!-- Languages -->
						<div class="me-10">
							<!-- Toggle -->
							<button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-warning rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
								<img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="assets/media/flags/korea.svg" alt="">
								<span data-kt-element="current-lang-name" class="me-1 fs-8">Korean</span>
								<i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
							</button>
							<!--// Toggle -->
							<!-- Menu -->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-warning w-150px py-4 fs-8" data-kt-menu="true" id="kt_auth_lang_menu">
								<!-- Menu item -->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
										<span class="symbol symbol-20px me-4">
										<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/korea.svg" alt="">
										</span>
										<span data-kt-element="lang-name">Korean</span>
									</a>
								</div>
								<!--// Menu item -->
								<!-- Menu item -->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
										<span class="symbol symbol-20px me-4">
										<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/united-states.svg" alt="">
										</span>
										<span data-kt-element="lang-name">English</span>
									</a>
								</div>
								<!--// Menu item -->
								<!-- Menu item -->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
										<span class="symbol symbol-20px me-4">
										<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/japan.svg" alt="">
										</span>
										<span data-kt-element="lang-name">Japanese</span>
									</a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu -->
						</div>
						<!--// Languages -->

						<!-- Links -->
						<div class="d-flex fs-8 gap-5">
							<a href="#" target="_blank" class="text-gray-600">이용약관</a>
							<a href="#" target="_blank" class="text-gray-600">서비스소개</a>
							<a href="#" target="_blank" class="text-gray-600">서비스가격</a>
						</div>
						<!--// Links -->
					</div>
					<!--// Footer -->
				</div>
				<!--// Body -->

				<!-- Aside -->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(assets/media/misc/auth-bg.png)">
					<!-- Content -->
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-10 w-100">
						<!-- Logo -->
						<img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-25px h-lg-35px mb-0 mb-lg-12">
						<!--// Logo -->

						<!-- Image -->
						<img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-15" src="assets/media/misc/auth-screens.png" alt="">
						<!--// Image -->

						<!-- Title -->
						<h1 class="d-none d-lg-block text-white fs-2 fw-bolder text-center text-uppercase mb-4 mb-lg-6">
							Today, start your business!
						</h1>
						<!--// Title -->

						<!-- Text -->
						<div class="d-none d-lg-block text-white fs-base text-center">
							강소기업의 <span class="text-warning fw-semibold">승승장구 비법</span>을 담은 업무 중심 협업 솔루션입니다.<br />
							중소기업의 힘은 빠르고 열린 의사결정과 효율적인 업무 소통에 있습니다.<br />
							조직원들의 가지고 있는 <span class="text-warning fw-semibold">힘을 한곳에 모아</span> 최고의 팀 성과 도출
						</div>
						<!--// Text -->
					</div>
					<!--// Content -->
				</div>
				<!--// Aside -->
			</div>
			<!--// Authentication - Sign-in -->
		</div>
		<!--// Root -->

		<!-- Javascript -->
		<!-- Global Javascript Bundle(mandatory for all pages) -->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--// Global Javascript Bundle -->
		<!-- Custom Javascript(used for this page only) -->
		<script src="assets/js/custom/authentication/sign-in/general.js"></script>
		<!--// Custom Javascript -->
		<!--// Javascript -->
	</body>
	<!--// Body -->
</html>