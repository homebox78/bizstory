<?php
include_once("header.php");
?>
<!-- Body -->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
	<!-- App -->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!-- Page -->
		<div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
			<?php
			include_once("navi.php");
			?>
			<!-- Wrapper -->
			<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
				<?php
				include_once("sidebar.php");
				?>
				<!-- Main -->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!-- Content wrapper -->
					<div class="d-flex flex-column flex-column-fluid">
						<!-- Content -->
						<div id="kt_app_content" class="app-content flex-column-fluid ">
							<!-- Content container -->
							<div id="kt_app_content_container" class="app-container container-fluid ">
								<!-- 심플노트 -->
								<div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2 d-none">
									<div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
										<!-- Messenger -->
										<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
											<!-- Card body -->
											<div class="card-body bg-gray-100" id="kt_drawer_chat_messenger_body">
												<!-- Messages -->
												<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
													<!-- Memo View 1 -->
													<div class="card mb-5 mb-xl-8">
														<div class="card-body pb-0">
															<div class="mb-5">
																<p class="text-gray-800 fw-normal mb-5">
																	1. 목동 나스 설치<br />
																	2. 인감증명서, 등본, 법무사 처리<br />
																	3. 비즈스토리 문서뷰어 기능 처리
																</p>
															</div>
															<div class="position-relative pb-11">
																<div class="position-absolute top-0 end-0 me-n5">
																	<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-1">
																	<i class="ki-outline ki-plus fs-1 mb-3"></i>
																	</span>
																	<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																	<i class="ki-outline ki-cross fs-1 mb-3"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<!--// Memo View 1 -->
													<!-- Memo View 2 -->
													<div class="card mb-5 mb-xl-8">
														<div class="card-body pb-0">
															<div class="mb-5">
																<p class="text-gray-800 fw-normal mb-5">
																	1. 목동 나스 설치<br />
																	2. 인감증명서, 등본, 법무사 처리<br />
																	3. 비즈스토리 문서뷰어 기능 처리
																</p>
															</div>
															<div class="position-relative pb-11">
																<div class="position-absolute top-0 end-0 me-n5">
																	<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-1">
																	<i class="ki-outline ki-plus fs-1 mb-3"></i>
																	</span>
																	<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																	<i class="ki-outline ki-cross fs-1 mb-3"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<!--// Memo View 2 -->
													<!-- Memo View 3 -->
													<div class="card mb-5 mb-xl-8">
														<div class="card-body pb-0">
															<div class="mb-5">
																<p class="text-gray-800 fw-normal mb-5">
																	1. 목동 나스 설치<br />
																	2. 인감증명서, 등본, 법무사 처리<br />
																	3. 비즈스토리 문서뷰어 기능 처리
																</p>
															</div>
															<div class="position-relative pb-11">
																<div class="position-absolute top-0 end-0 me-n5">
																	<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-1">
																	<i class="ki-outline ki-plus fs-1 mb-3"></i>
																	</span>
																	<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																	<i class="ki-outline ki-cross fs-1 mb-3"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<!--// Memo View 3 -->
													<!-- Memo View 4 -->
													<div class="card mb-5 mb-xl-8">
														<div class="card-body pb-0">
															<div class="mb-5">
																<p class="text-gray-800 fw-normal mb-5">
																	1. 목동 나스 설치<br />
																	2. 인감증명서, 등본, 법무사 처리<br />
																	3. 비즈스토리 문서뷰어 기능 처리
																</p>
															</div>
															<div class="position-relative pb-11">
																<div class="position-absolute top-0 end-0 me-n5">
																	<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-1">
																	<i class="ki-outline ki-plus fs-1 mb-3"></i>
																	</span>
																	<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																	<i class="ki-outline ki-cross fs-1 mb-3"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<!--// Memo View 4 -->
													<!-- Memo View5 -->
													<div class="card d-none" id="kt_widget_5">
														<div class="card-body pb-0">
															<div class="mb-5">
																<p class="text-gray-800 fw-normal mb-5">
																	1. 목동 나스 설치<br />
																	2. 인감증명서, 등본, 법무사 처리<br />
																	3. 비즈스토리 문서뷰어 기능 처리
																</p>
															</div>
															<div class="position-relative pb-11">
																<div class="position-absolute top-0 end-0 me-n5">
																	<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-1">
																	<i class="ki-outline ki-plus fs-1 mb-3"></i>
																	</span>
																	<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																	<i class="ki-outline ki-cross fs-1 mb-3"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<!--// Memo View5 -->
													<!-- Memo View Load More-->
													<button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
													<span class="indicator-label">
													메모 더보기
													</span>
													<span class="indicator-progress">
													Loading... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
													</span>
													</button>
													<!--// Memo View load more-->
												</div>
												<!--// Messages -->
											</div>
											<!--// Card body -->
											<!-- Card footer -->
											<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
												<textarea class="form-control form-control-flush resize-none px-2 min-h-25px mb-3" name="param[remark]" id="memo_remark" rows="3" data-kt-element="input" placeholder="메모를 입력하세요."></textarea>
												<div class="text-end">
													<button class="btn btn-dark" type="button" data-kt-element="send">저장</button>
												</div>
											</div>
											<!--// Card footer -->
										</div>
										<!--// Messenger -->
									</div>
								</div>
								<!-- //심플노트 -->

								<!-- Row -->
								<div class="row g-5 g-xl-10 mb-2 mb-xl-4">
									<!-- Col -->
									<div class="col-md-6 col-xl-4">
										<!-- 사용자 정보 -->
										<div class="card card-flush h-xl-100 bgi-size-contain bgi-position-x-end mb-2 mb-xl-4 bg-warning" style="background-image:url('assets/media/patterns/vector-1.png')">
											<!-- Header -->
											<div class="card-header pt-5">
												<div class="card-title d-flex flex-column">
													<span class="fs-2x fw-semibold text-white me-2 lh-1 ls-n2">김지훈</span>
													<span class="text-white pt-1 fw-semibold fs-7">과장</span>
												</div>
											</div>
											<!--// Header -->
											<!-- Card body -->
											<div class="card-body d-flex align-items-center pt-0">
												<!-- Progress -->
												<div class="d-flex flex-column mt-3 w-100">
													<div class="d-flex justify-content-between pb-2">
														<!-- Photo -->
														<div class="bg-white symbol symbol-80px symbol-lg-150px symbol-circle mb-4">
															<img src="assets/media/avatars/300-5.png" class="p-2" alt="">
														</div>
														<!--// Photo -->
													</div>
													<div class="d-flex justify-content-between text-white pt-1 fw-semibold fs-5">비즈스토리 사용내역</div>
													<div class="d-flex justify-content-between fw-semibold text-white opacity-75 pt-1 fw-semibold fs-8 w-100 mt-auto mb-2">
														<span>시작일/만기일: 2012.02.20/2017.02.20</span>
														<span>62%</span>
													</div>
													<div class="h-8px w-100 bg-white bg-opacity-50 rounded">
														<div class="bg-white rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--// Progress -->
											</div>
											<!--// Card body -->
										</div>
										<!--// 사용자 정보 -->
									</div>
									<!--// Col -->
									<!-- Col -->
									<div class="col-md-6 col-xl-8">
										<!-- 일정목록 -->
										<div class="card card-flush h-xl-100">
											<!-- 등록자, 분류 -->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-semibold text-dark">일정목록</span>
													<span class="text-muted mt-1 fw-semibold fs-7">총 3건의 일정</span>
												</h3>
												<div class="card-toolbar">
													<div class="d-flex flex-column justify-content-end pe-0">
														<div class="symbol-group symbol-hover flex-nowrap">
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="우덕성">
																<span class="symbol-label bg-danger text-inverse-warning fw-semibold">W</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="정지훈">
																<img alt="Pic" src="assets/media/avatars/300-11.png">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김민재">
																<span class="symbol-label bg-primary text-inverse-primary fw-semibold">K</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="서경원">
																<img alt="Pic" src="assets/media/avatars/300-1.png">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="강소연">
																<img alt="Pic" src="assets/media/avatars/300-3.png">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이나영">
																<img alt="Pic" src="assets/media/avatars/300-12.png">
															</div>
															<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="팀 일정 바로가기">
															<span class="symbol-label bg-dark text-gray-300 fs-8 fw-semibold">+13</span>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!--// 등록자, 분류 -->
											<!-- Body -->
											<div class="card-body pt-4 px-0">
												<!-- Nav -->
												<ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-6 px-8">
													<!-- Nav item -->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px p-3 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
														<span class="fs-7 fw-semibold">토</span>
														<span class="fs-6 fw-semibold">8</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px p-3 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
														<span class="fs-7 fw-semibold">일</span>
														<span class="fs-6 fw-semibold">9</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px p-3 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
														<span class="fs-7 fw-semibold">월</span>
														<span class="fs-6 fw-semibold">10</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px p-3 btn-active-warning active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
														<span class="fs-7 fw-semibold">화</span>
														<span class="fs-6 fw-semibold">11</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px p-3 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
														<span class="fs-7 fw-semibold">수</span>
														<span class="fs-6 fw-semibold">12</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px p-3 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
														<span class="fs-7 fw-semibold">목</span>
														<span class="fs-6 fw-semibold">13</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px p-3 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
														<span class="fs-7 fw-semibold">금</span>
														<span class="fs-6 fw-semibold">14</span>
														</a>
													</li>
													<!--// Nav item -->
												</ul>
												<!--// Nav -->
												<!-- Tab Content -->
												<div class="tab-content mb-2 px-9">
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1">
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	10:20 - 11:00
																	<span class="text-gray-400 fw-semibold fs-9">AM</span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	도서관 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-success opacity-75-hover fw-semibold">업무</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	12:00 - 13:40
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	경기도교육청 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-warning opacity-75-hover fw-semibold">미팅</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	10:20 - 11:00
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	도서관 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-success opacity-75-hover fw-semibold">업무</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	12:00 - 13:40
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	경기도교육청 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-warning opacity-75-hover fw-semibold">미팅</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	10:20 - 11:00
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	도서관 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-success opacity-75-hover fw-semibold">업무</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	12:00 - 13:40
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	경기도교육청 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-warning opacity-75-hover fw-semibold">미팅</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	10:20 - 11:00
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	도서관 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-success opacity-75-hover fw-semibold">업무</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	12:00 - 13:40
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	경기도교육청 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-warning opacity-75-hover fw-semibold">미팅</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	10:20 - 11:00
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	도서관 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-success opacity-75-hover fw-semibold">업무</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	12:00 - 13:40
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	경기도교육청 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-warning opacity-75-hover fw-semibold">미팅</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	10:20 - 11:00
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	도서관 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-success opacity-75-hover fw-semibold">업무</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	12:00 - 13:40
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	경기도교육청 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-warning opacity-75-hover fw-semibold">미팅</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	10:20 - 11:00
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	도서관 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-success opacity-75-hover fw-semibold">업무</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center mt-4">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!-- Info -->
															<div class="flex-grow-1 me-5">
																<!-- Time -->
																<div class="text-gray-700 fw-semibold fs-4">
																	12:00 - 13:40
																	<span class="text-gray-400 fw-semibold fs-9">
																	AM                                    </span>
																</div>
																<!--// Time -->
																<!-- Description -->
																<div class="text-gray-800 fw-semibold fs-6">
																	경기도교육청 유지보수 회의
																</div>
																<!--// Description -->
																<!-- Link -->
																<div class="text-gray-400 fs-8">
																	일정종류
																	<a href="#" class="text-warning opacity-75-hover fw-semibold">미팅</a>
																</div>
																<!--// Link -->
															</div>
															<!--// Info -->
															<a href="#" class="btn btn-sm btn-light">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
												</div>
												<!--// Tab Content -->
											</div>
											<!--// Card Body -->
										</div>
										<!--// 일정목록 -->
									</div>
									<!--// Col -->
									<!-- Col -->
									<div class="col-12">
										<!-- Row -->
										<div class="row g-9">
											<div class="col-md-6">
												<div class="card card-flush h-xl-100">
													<div class="card-header pt-0 px-8">
														<!--Tabs-->
														<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2">
															<!--Tab item-->
															<li class="nav-item">
																<a class="nav-link text-active-primary d-flex align-items-center pb-4 active" data-bs-toggle="tab" href="#workList1">
																	<i class="ki-duotone ki-home fw-semibold fs-4 me-1"></i> 접수 미처리현황
																	<span class="fs-6 text-gray-400 ms-2">11</span>
																</a>
															</li>
															<!--// Tab item-->

															<!--Tab item-->
															<li class="nav-item">
																<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#workList2">
																	<i class="ki-duotone ki-home fw-semibold fs-4 me-1"></i> 업무 리스트
																	<span class="fs-6 text-gray-400 ms-2">08</span>
																</a>
															</li>
															<!--// Tab item-->

															<!--Tab item-->
															<li class="nav-item">
																<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#workList3">
																	<i class="ki-duotone ki-home fw-semibold fs-4 me-1"></i> 프로젝트 리스트
																	<span class="fs-6 text-gray-400 ms-2">07</span>
																</a>
															</li>
															<!--// Tab item-->
														</ul>
														<!--// Tabs-->
													</div>
													<div class="card-body pt-0 px-8">
														<!--Tab content-->
														<div class="tab-content hover-scroll-overlay-y" style="height: 490px">
															<!--Tab pane-->
															<div class="tab-pane fade show active" id="workList1" role="tabpanel">
																<!-- 접수 미처리현황 -->
																<div class="office-group">
																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">11동원대학교 오정민</span><br />(2023-04-10 14:27)</div>
																			<div class="badge badge-danger fw-normal py-2 px-3">웹사이트관련</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">입학홈페이지 컴퓨터소프트웨어과 학과홍보영상 버튼 생성 요청</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">안녕하세요 입학홍보처 오정민 입니다.<br />저희 입학홈페이지 컴퓨터소프트웨어과 소개 페이지에 학과홍보영상 버튼 생성 부탁드립니다. </div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김은정">
																				<img alt="Pic" src="assets/media/avatars/300-7.png">
																				</a>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 첨부파일 -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">2</span>
																				</div>
																				<!--// 첨부파일 -->
																				<!-- 코멘트 -->
																				<div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
																					<i class="ki-duotone ki-message-text-2 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">3</span>
																				</div>
																				<!--// 코멘트 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">덕성여자대학교 엄인미</span><br />(2023-04-05 18:17)</div>
																			<div class="badge badge-primary fw-normal py-2 px-3">문의사항관련</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">지역사회와 덕성 컨텐츠 페이지 수정 및 추가</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">1) 지역사회와 덕성 : 표에 정부기관 / 봉사 / 장애 세가지 삭제<br />2) 하단 메뉴 '업무협약'에  [첨부파일1. 업무협약] 참고하여 사진 및 내용 추가</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이지환">
																				<img alt="Pic" src="assets/media/avatars/300-11.png">
																				</a>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 첨부파일 -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">1</span>
																				</div>
																				<!--// 첨부파일 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">1111동원대학교 오정민</span><br />(2023-04-10 14:27)</div>
																			<div class="badge badge-danger fw-normal py-2 px-3">웹사이트관련</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">입학홈페이지 컴퓨터소프트웨어과 학과홍보영상 버튼 생성 요청</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">안녕하세요 입학홍보처 오정민 입니다.<br />저희 입학홈페이지 컴퓨터소프트웨어과 소개 페이지에 학과홍보영상 버튼 생성 부탁드립니다. </div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김은정">
																				<img alt="Pic" src="assets/media/avatars/300-7.png">
																				</a>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 첨부파일 -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">2</span>
																				</div>
																				<!--// 첨부파일 -->
																				<!-- 코멘트 -->
																				<div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
																					<i class="ki-duotone ki-message-text-2 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">3</span>
																				</div>
																				<!--// 코멘트 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">덕성여자대학교 엄인미</span><br />(2023-04-05 18:17)</div>
																			<div class="badge badge-primary fw-normal py-2 px-3">문의사항관련</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">지역사회와 덕성 컨텐츠 페이지 수정 및 추가</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">1) 지역사회와 덕성 : 표에 정부기관 / 봉사 / 장애 세가지 삭제<br />2) 하단 메뉴 '업무협약'에  [첨부파일1. 업무협약] 참고하여 사진 및 내용 추가</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이지환">
																				<img alt="Pic" src="assets/media/avatars/300-11.png">
																				</a>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 첨부파일 -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">1</span>
																				</div>
																				<!--// 첨부파일 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<a href="#" class="btn btn-warning er w-100 fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">새 접수 등록</a>
																</div>
																<!--// 접수 미처리현황 -->
															</div>
															<!--// Tab pane-->

															<!--Tab pane-->
															<div class="tab-pane fade" id="workList2" role="tabpanel">
																<!-- 업무 리스트 -->
																<div class="office-group">
																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">서경원 대표</span><br />(2023-04-12 16:35)</div>
																			<div>
																				<span class="badge badge-secondary fw-normal py-2 px-3">지사</span>
																				<span class="badge badge-success fw-normal py-2 px-3">요청</span>
																			</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">경기도청_조직관리시스템구축사업</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">- 조직관리 프로그램 개발(S/W) : 232,990천원<br />- SSO라이선스, 리포팅툴, BI솔루션 구입(상용S/W*) : 86,790천원</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="서경원">
																					<img alt="Pic" src="assets/media/avatars/300-1.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="박시몬">
																					<span class="symbol-label bg-primary text-inverse-primary fw-semibold">P</span>
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이철수">
																					<img alt="Pic" src="assets/media/avatars/300-14.png">
																				</div>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 첨부파일 -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">1</span>
																				</div>
																				<!--// 첨부파일 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">장영훈 부장</span><br />(2023-04-03 16:57)</div>
																			<div>
																				<span class="badge badge-info fw-normal py-2 px-3">승인</span>
																			</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">[영업업무]2020년 견적석 발송내역</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">1. 발급 기관명 (업체명)<br />2. 담당자 명함 (없을시 이름, 연락처, 이메일 기입)<br />3. 발급한 견적서 엑셀파일 등록</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김재명 이사">
																					<span class="symbol-label bg-warning text-inverse-warning fw-semibold">K</span>
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이철민 부장">
																					<img alt="Pic" src="assets/media/avatars/300-17.png">
																				</div>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 코멘트 -->
																				<div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
																					<i class="ki-duotone ki-message-text-2 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">3</span>
																				</div>
																				<!--// 코멘트 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">서경원 대표</span><br />(2023-04-12 16:35)</div>
																			<div>
																				<span class="badge badge-secondary fw-normal py-2 px-3">지사</span>
																				<span class="badge badge-success fw-normal py-2 px-3">요청</span>
																			</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">경기도청_조직관리시스템구축사업</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">- 조직관리 프로그램 개발(S/W) : 232,990천원<br />- SSO라이선스, 리포팅툴, BI솔루션 구입(상용S/W*) : 86,790천원</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="서경원">
																					<img alt="Pic" src="assets/media/avatars/300-1.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="박시몬">
																					<span class="symbol-label bg-primary text-inverse-primary fw-semibold">P</span>
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이철수">
																					<img alt="Pic" src="assets/media/avatars/300-14.png">
																				</div>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 첨부파일 -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">1</span>
																				</div>
																				<!--// 첨부파일 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">장영훈 부장</span><br />(2023-04-03 16:57)</div>
																			<div>
																				<span class="badge badge-info fw-normal py-2 px-3">승인</span>
																			</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">[영업업무]2020년 견적석 발송내역</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">1. 발급 기관명 (업체명)<br />2. 담당자 명함 (없을시 이름, 연락처, 이메일 기입)<br />3. 발급한 견적서 엑셀파일 등록</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김재명 이사">
																					<span class="symbol-label bg-warning text-inverse-warning fw-semibold">K</span>
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이철민 부장">
																					<img alt="Pic" src="assets/media/avatars/300-17.png">
																				</div>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 코멘트 -->
																				<div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
																					<i class="ki-duotone ki-message-text-2 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">3</span>
																				</div>
																				<!--// 코멘트 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<a href="#" class="btn btn-primary er w-100 fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">새 업무 등록</a>
																</div>
																<!--// 업무 리스트 -->
															</div>
															<!--// Tab pane-->

															<!--Tab pane-->
															<div class="tab-pane fade" id="workList3" role="tabpanel">
																<!-- 프로젝트 리스트 -->
																<div class="office-group">
																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">우덕성 부장</span><br />(2023-03-28 10:35)</div>
																			<div class="badge badge-warning fw-normal py-2 px-3">제인사작업</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">국립생태원 홈페이지 개편사업 제안서작성</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">4월 18일 제안기획회의<br />4월 25일 1차 작업내용 검토 / 입찰자격관련 서류등록 및 검토<br />5월 5일 2차 작업내용 검토 / 입찰제출서류 준비</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이주영">
																					<img alt="Pic" src="assets/media/avatars/300-2.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김현석">
																					<img alt="Pic" src="assets/media/avatars/300-19.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="신동훈">
																					<span class="symbol-label bg-primary text-inverse-primary fw-semibold">S</span>
																				</div>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- Stat -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">2</span>
																				</div>
																				<!--// Stat -->
																				<!-- Stat -->
																				<div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
																					<i class="ki-duotone ki-message-text-2 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">3</span>
																				</div>
																				<!--// Stat -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">이영훈 과장</span><br />(2023-02-28 11:28)</div>
																			<div class="badge badge-primary fw-normal py-2 px-3">CMS구축사업</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">한국가스공사 동반성장 홈페이지 구축 사업</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">가. 건명 : 동방성장센터 홈페이지 구축 사업<br />나. 사업예산(기초금액) : 104,500,000원(VAT 포함)</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="강한나 주임">
																					<img alt="Pic" src="assets/media/avatars/300-18.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="주영호 과장">
																					<img alt="Pic" src="assets/media/avatars/300-19.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김지애 사원">
																					<img alt="Pic" src="assets/media/avatars/300-20.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="강현성 대리">
																					<img alt="Pic" src="assets/media/avatars/300-21.png">
																				</div>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 첨부파일 -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">3</span>
																				</div>
																				<!--// 첨부파일 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">우덕성 부장</span><br />(2023-03-28 10:35)</div>
																			<div class="badge badge-warning fw-normal py-2 px-3">제인사작업</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">국립생태원 홈페이지 개편사업 제안서작성</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">4월 18일 제안기획회의<br />4월 25일 1차 작업내용 검토 / 입찰자격관련 서류등록 및 검토<br />5월 5일 2차 작업내용 검토 / 입찰제출서류 준비</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이주영">
																					<img alt="Pic" src="assets/media/avatars/300-2.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김현석">
																					<img alt="Pic" src="assets/media/avatars/300-19.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="신동훈">
																					<span class="symbol-label bg-primary text-inverse-primary fw-semibold">S</span>
																				</div>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- Stat -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">2</span>
																				</div>
																				<!--// Stat -->
																				<!-- Stat -->
																				<div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
																					<i class="ki-duotone ki-message-text-2 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">3</span>
																				</div>
																				<!--// Stat -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<!-- Loop -->
																	<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																		<!-- 등록자, 분류 -->
																		<div class="d-flex flex-stack mb-3">
																			<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">이영훈 과장</span><br />(2023-02-28 11:28)</div>
																			<div class="badge badge-primary fw-normal py-2 px-3">CMS구축사업</div>
																		</div>
																		<!--// 등록자, 분류 -->
																		<!-- 제목 -->
																		<div class="mb-2 ellipsis-1">
																			<a href="#" class="fs-5 fw-semibold mb-1 text-gray-900 text-hover-primary">한국가스공사 동반성장 홈페이지 구축 사업</a>
																		</div>
																		<!--// 제목 -->
																		<!-- 내용 -->
																		<div class="fs-7 text-gray-600 mb-5 ellipsis-2">가. 건명 : 동방성장센터 홈페이지 구축 사업<br />나. 사업예산(기초금액) : 104,500,000원(VAT 포함)</div>
																		<!--// 내용 -->
																		<!-- 담당자, 기타 -->
																		<div class="d-flex flex-stack flex-wrapr">
																			<!-- 담당자 -->
																			<div class="symbol-group symbol-hover my-1">
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="강한나 주임">
																					<img alt="Pic" src="assets/media/avatars/300-18.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="주영호 과장">
																					<img alt="Pic" src="assets/media/avatars/300-19.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김지애 사원">
																					<img alt="Pic" src="assets/media/avatars/300-20.png">
																				</div>
																				<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="강현성 대리">
																					<img alt="Pic" src="assets/media/avatars/300-21.png">
																				</div>
																			</div>
																			<!--// 담당자 -->
																			<!-- 기타 -->
																			<div class="d-flex my-1">
																				<!-- 첨부파일 -->
																				<div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
																					<i class="ki-duotone ki-paper-clip fs-3"></i>
																					<span class="ms-1 fs-7 fw-semibold text-gray-600">3</span>
																				</div>
																				<!--// 첨부파일 -->
																			</div>
																			<!--// 기타 -->
																		</div>
																		<!--// 담당자, 기타 -->
																	</div>
																	<!--// Loop -->

																	<a href="#" class="btn btn-success er w-100 fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">새 프로젝트 등록</a>
																</div>
																<!--// 프로젝트 리스트 -->
															</div>
															<!--// Tab pane-->
														</div>
														<!--// Tab content-->
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<!-- 이력 -->
												<div class="card card-flush h-xl-100">
													<div class="card-header pt-0 px-8">
														<!--Tabs-->
														<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2">
															<!--Tab item-->
															<li class="nav-item">
																<a class="nav-link text-active-primary d-flex align-items-center pb-4 active" data-bs-toggle="tab" href="#timelineList1">
																	<i class="ki-duotone ki-home fw-semibold fs-4 me-1"></i> 접수 이력
																	<span class="fs-6 text-gray-400 ms-2">11</span>
																</a>
															</li>
															<!--// Tab item-->

															<!--Tab item-->
															<li class="nav-item">
																<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#timelineList2">
																	<i class="ki-duotone ki-home fw-semibold fs-4 me-1"></i> 업무 이력
																	<span class="fs-6 text-gray-400 ms-2">08</span>
																</a>
															</li>
															<!--// Tab item-->

															<!--Tab item-->
															<li class="nav-item">
																<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#timelineList3">
																	<i class="ki-duotone ki-home fw-semibold fs-4 me-1"></i> 프로젝트 이력
																	<span class="fs-6 text-gray-400 ms-2">07</span>
																</a>
															</li>
															<!--// Tab item-->
														</ul>
														<!--// Tabs-->
													</div>
													<div class="card-body pt-0 px-8">
														<!--Tab content-->
														<div class="tab-content hover-scroll-overlay-y" style="height: 490px">
															<!--Tab pane-->
															<div class="tab-pane fade show active" id="timelineList1" role="tabpanel">
																<!-- Timeline -->
																<div class="timeline-label">
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="신동훈">
																				<img src="assets/media/avatars/300-11.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[한국고전번역원]</span> <span class="me-1">고전번역지원협력사업 홈페이지 수정건</span></a>
																				<div class="fs-8">작업이 진행중입니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="성지영">
																				<span class="symbol-label bg-primary text-inverse-primary fw-semibold">S</span>
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[한국사이버외국어대학교]</span> <span class="me-1">웹페이지 일부 불러오기 실패</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="고주현">
																				<span class="symbol-label bg-danger text-inverse-danger fw-semibold">K</span>
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[덕성여자대학교]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김지현">
																				<img src="assets/media/avatars/300-15.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[국사편찬위원회]</span> <span class="me-1">팝업 베너 리뉴얼 요청</span></a>
																				<div class="fs-8">작업이 진행중입니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="강은주">
																				<img src="assets/media/avatars/300-16.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[서울여자대학교]</span> <span class="me-1">지역사회와 덕성 컨텐츠 페이지 수정 및 추가</span></a>
																				<div class="fs-8">내용 추가 요청 작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김나영">
																				<img src="assets/media/avatars/300-23.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[경기도교육청]</span> <span class="me-1">메뉴 추가</span></a>
																				<div class="fs-8">접수가 등록되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김민성">
																				<img src="assets/media/avatars/300-17.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[경기도시청]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">내용 추가 요청 작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김은희">
																				<img src="assets/media/avatars/300-18.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[안양인재개발원]</span> <span class="me-1">배너 추가 및 수정 요청</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이찬영">
																				<img src="assets/media/avatars/300-19.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[센스리더]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="박미주">
																				<img src="assets/media/avatars/300-20.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[건소프트]</span> <span class="me-1">배너 추가 및 수정 요청</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																</div>
																<!--// Timeline -->
															</div>
															<!--// Tab pane-->

															<!--Tab pane-->
															<div class="tab-pane fade" id="timelineList2" role="tabpanel">
																<!-- Timeline -->
																<div class="timeline-label">
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="신동훈">
																				<img src="assets/media/avatars/300-11.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[한국고전번역원]</span> <span class="me-1">고전번역지원협력사업 홈페이지 수정건</span></a>
																				<div class="fs-8">작업이 진행중입니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="성지영">
																				<span class="symbol-label bg-primary text-inverse-primary fw-semibold">S</span>
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[한국사이버외국어대학교]</span> <span class="me-1">웹페이지 일부 불러오기 실패</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="고주현">
																				<span class="symbol-label bg-danger text-inverse-danger fw-semibold">K</span>
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[덕성여자대학교]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김지현">
																				<img src="assets/media/avatars/300-15.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[국사편찬위원회]</span> <span class="me-1">팝업 베너 리뉴얼 요청</span></a>
																				<div class="fs-8">작업이 진행중입니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="강은주">
																				<img src="assets/media/avatars/300-16.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[서울여자대학교]</span> <span class="me-1">지역사회와 덕성 컨텐츠 페이지 수정 및 추가</span></a>
																				<div class="fs-8">내용 추가 요청 작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김나영">
																				<img src="assets/media/avatars/300-23.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[경기도교육청]</span> <span class="me-1">메뉴 추가</span></a>
																				<div class="fs-8">접수가 등록되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김민성">
																				<img src="assets/media/avatars/300-17.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[경기도시청]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">내용 추가 요청 작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김은희">
																				<img src="assets/media/avatars/300-18.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[안양인재개발원]</span> <span class="me-1">배너 추가 및 수정 요청</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이찬영">
																				<img src="assets/media/avatars/300-19.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[센스리더]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="박미주">
																				<img src="assets/media/avatars/300-20.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[건소프트]</span> <span class="me-1">배너 추가 및 수정 요청</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																</div>
																<!--// Timeline -->
															</div>
															<!--// Tab pane-->

															<!--Tab pane-->
															<div class="tab-pane fade" id="timelineList3" role="tabpanel">
																<!-- Timeline -->
																<div class="timeline-label">
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="신동훈">
																				<img src="assets/media/avatars/300-11.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[한국고전번역원]</span> <span class="me-1">고전번역지원협력사업 홈페이지 수정건</span></a>
																				<div class="fs-8">작업이 진행중입니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="성지영">
																				<span class="symbol-label bg-primary text-inverse-primary fw-semibold">S</span>
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[한국사이버외국어대학교]</span> <span class="me-1">웹페이지 일부 불러오기 실패</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="고주현">
																				<span class="symbol-label bg-danger text-inverse-danger fw-semibold">K</span>
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[덕성여자대학교]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김지현">
																				<img src="assets/media/avatars/300-15.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[국사편찬위원회]</span> <span class="me-1">팝업 베너 리뉴얼 요청</span></a>
																				<div class="fs-8">작업이 진행중입니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="강은주">
																				<img src="assets/media/avatars/300-16.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[서울여자대학교]</span> <span class="me-1">지역사회와 덕성 컨텐츠 페이지 수정 및 추가</span></a>
																				<div class="fs-8">내용 추가 요청 작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김나영">
																				<img src="assets/media/avatars/300-23.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[경기도교육청]</span> <span class="me-1">메뉴 추가</span></a>
																				<div class="fs-8">접수가 등록되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김민성">
																				<img src="assets/media/avatars/300-17.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[경기도시청]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">내용 추가 요청 작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="김은희">
																				<img src="assets/media/avatars/300-18.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[안양인재개발원]</span> <span class="me-1">배너 추가 및 수정 요청</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="이찬영">
																				<img src="assets/media/avatars/300-19.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[센스리더]</span> <span class="me-1">홈페이지>정보공개>정보목록</span></a>
																				<div class="fs-8">작업이 완료되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																	<!-- Item -->
																	<div class="timeline-item d-flex align-items-center">
																		<div class="timeline-label"></div>
																		<div class="timeline-badge">
																			<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="박미주">
																				<img src="assets/media/avatars/300-20.png" alt="">
																			</div>
																		</div>
																		<div class="d-flex w-100 ps-8 text-gray-600 fs-7">
																			<div class="w-75 ellipsis-3">
																				<a href="#" class="ellipsis-1 text-gray-900 text-hover-primary"><span class="me-1">[건소프트]</span> <span class="me-1">배너 추가 및 수정 요청</span></a>
																				<div class="fs-8">승인되었습니다.</div>
																			</div>
																			<div class="w-25 text-gray-500 fs-8 text-end mt-1">07-28 10:00</div>
																		</div>
																	</div>
																	<!--// Item -->
																</div>
																<!--// Timeline -->
															</div>
															<!--// Tab pane-->
														</div>
														<!--// Tab content-->
													</div>
												</div>
												<!--// 이력 -->
											</div>
											<div class="col-md-6">
												<!-- 현재 업무현황 -->
												<div class="card card-flush h-xl-100">
													<!--Body-->
													<div class="card-body p-0">
														<!--Header-->
														<div class="px-9 pt-7 card-rounded h-425px w-100 bg-warning" style="background-image:url('assets/media/patterns/vector-1.png')">
															<!--Heading-->
															<div class="d-flex flex-stack">
																<h3 class="m-0 text-white fw-bold fs-3">현재 업무현황</h3>
																<div class="ms-1">
																	<!--Menu-->
																	<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                    </button>
																	<!--Menu 3-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																		<!--Heading-->
																		<div class="menu-item px-3">
																			<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
																				나의업무
																			</div>
																		</div>
																		<!--// Heading-->
																		<!--Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				일정
																			</a>
																		</div>
																		<!--// Menu item-->
																		<!--Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link flex-stack px-3">
																				업무
																			</a>
																		</div>
																		<!--// Menu item-->
																		<!--Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				쪽지
																			</a>
																		</div>
																		<!--// Menu item-->
																		<!--Menu item-->
																		<div class="menu-item px-3 my-1">
																			<a href="#" class="menu-link px-3">
																				자기정보
																			</a>
																		</div>
																		<!--// Menu item-->
																	</div>
																	<!--// Menu 3-->
																	<!--// Menu-->
																</div>
															</div>
															<!--// Heading-->

															<!--Carousel-->
															<div class="carousel carousel-custom carousel-stretch slide" data-bs-ride="carousel" data-bs-interval="8000">
																<!--Heading-->
																<div class="d-flex flex-stack align-items-center flex-wrap">
																	<ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
																		<li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="0" class="ms-1 active"></li>
																		<li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="1" class="ms-1"></li>
																		<li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="2" class="ms-1"></li>
																	</ol>
																</div>
																<!--// Heading-->

																<!--Carousel inner-->
																<div class="carousel-inner pt-6">
																	<!--Item-->
																	<div class="carousel-item active">
																		<img src="http://www.bizstory.co.kr/data/banner/banner_4_1.jpg" class="w-100" alt="">
																	</div>
																	<!--// Item-->

																	<!--Item-->
																	<div class="carousel-item">
																		<img src="http://www.bizstory.co.kr/data/banner/banner_5_1.jpg" class="w-100" alt="">
																	</div>
																	<!--// Item-->

																	<!--Item-->
																	<div class="carousel-item">
																		<img src="http://www.bizstory.co.kr/data/banner/banner_6_1.jpg" class="w-100" alt="">
																	</div>
																	<!--// Item-->
																</div>
																<!--// Carousel inner-->
															</div>
															<!--// Carousel-->
														</div>
														<!--// Header-->
														<!--Items-->
														<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -40px">
															<!--Item-->
															<div class="d-flex align-items-center mb-6">
																<!--Symbol-->
																<div class="symbol symbol-45px w-40px me-5">
																	<span class="symbol-label bg-lighten">
																	<i class="ki-duotone ki-compass fs-1"><span class="path1"></span><span class="path2"></span></i>
																	</span>
																</div>
																<!--// Symbol-->
																<!--Description-->
																<div class="d-flex align-items-center flex-wrap w-100">
																	<!--Title-->
																	<div class="mb-1 pe-3 flex-grow-1">
																		<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">총업무처리</a>
																		<div class="text-gray-400 fw-semibold fs-7">613</div>
																	</div>
																	<!--// Title-->
																	<!--Label-->
																	<div class="d-flex align-items-center">
																		<div class="fw-bold fs-5 text-gray-800 pe-1">90%</div>
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-1"><span class="path1"></span><span class="path2"></span></i>
																	</div>
																	<!--// Label-->
																</div>
																<!--// Description-->
															</div>
															<!--// Item-->
															<!--Item-->
															<div class="d-flex align-items-center mb-6">
																<!--Symbol-->
																<div class="symbol symbol-45px w-40px me-5">
																	<span class="symbol-label bg-lighten">
																	<i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
																	</span>
																</div>
																<!--// Symbol-->
																<!--Description-->
																<div class="d-flex align-items-center flex-wrap w-100">
																	<!--Title-->
																	<div class="mb-1 pe-3 flex-grow-1">
																		<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">총접수처리</a>
																		<div class="text-gray-400 fw-semibold fs-7">288</div>
																	</div>
																	<!--// Title-->
																	<!--Label-->
																	<div class="d-flex align-items-center">
																		<div class="fw-bold fs-5 text-gray-800 pe-1">45%</div>
																		<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1"><span class="path1"></span><span class="path2"></span></i>
																	</div>
																	<!--// Label-->
																</div>
																<!--// Description-->
															</div>
															<!--// Item-->
															<!--Item-->
															<div class="d-flex align-items-center mb-6">
																<!--Symbol-->
																<div class="symbol symbol-45px w-40px me-5">
																	<span class="symbol-label bg-lighten">
																	<i class="ki-duotone ki-graph-up fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
																	</span>
																</div>
																<!--// Symbol-->
																<!--Description-->
																<div class="d-flex align-items-center flex-wrap w-100">
																	<!--Title-->
																	<div class="mb-1 pe-3 flex-grow-1">
																		<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">진행업무</a>
																		<div class="text-gray-400 fw-semibold fs-7">52</div>
																	</div>
																	<!--// Title-->
																	<!--Label-->
																	<div class="d-flex align-items-center">
																		<div class="fw-bold fs-5 text-gray-800 pe-1">25%</div>
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-1"><span class="path1"></span><span class="path2"></span></i>
																	</div>
																	<!--// Label-->
																</div>
																<!--// Description-->
															</div>
															<!--// Item-->
															<!--Item-->
															<div class="d-flex align-items-center ">
																<!--Symbol-->
																<div class="symbol symbol-45px w-40px me-5">
																	<span class="symbol-label bg-lighten">
																	<i class="ki-duotone ki-document fs-1"><span class="path1"></span><span class="path2"></span></i>
																	</span>
																</div>
																<!--// Symbol-->
																<!--Description-->
																<div class="d-flex align-items-center flex-wrap w-100">
																	<!--Title-->
																	<div class="mb-1 pe-3 flex-grow-1">
																		<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">진행접수</a>
																		<div class="text-gray-400 fw-semibold fs-7">7</div>
																	</div>
																	<!--// Title-->
																	<!--Label-->
																	<div class="d-flex align-items-center">
																		<div class="fw-bold fs-5 text-gray-800 pe-1">10%</div>
																		<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1"><span class="path1"></span><span class="path2"></span></i>
																	</div>
																	<!--// Label-->
																</div>
																<!--// Description-->
															</div>
															<!--// Item-->
														</div>
														<!--// Items-->
													</div>
													<!--// Body-->
												</div>
												<!-- // 현재 업무현황 -->
											</div>
											<div class="col-md-6">
												<div class="card card-flush h-xl-100">
													<!-- Col header -->
													<div class="card-header pt-6 px-6">
														<div class="fw-semibold fs-4">
															최근접속 회원정보
															<span class="fs-6 text-gray-400 ms-2">10</span>
														</div>
													</div>
													<!--// Col header -->
													<div class="card-body pt-0 px-0">
														<div class="px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height: 610px">
															<!-- List -->
															<div class="me-n7 pe-7">
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-13.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			김원홍
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-14.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			감우성
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-15.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			이나영
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-16.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			장은주
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-17.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			이동현
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-18.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			김섬희
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-19.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			강찬웅
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-20.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			김지현
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-21.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			고주원
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-22.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			박성민
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->

																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-13.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			김원홍
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-14.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			감우성
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-15.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			이나영
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-16.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			장은주
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-17.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			이동현
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-18.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			김섬희
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-19.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			강찬웅
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-20.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			김지현
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-21.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			고주원
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
																<!-- User -->
																<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-22.png">
																		</div>
																		<div class="ms-6">
																			<a href="#" class="d-flex align-items-center fs-5 fw-semibold text-dark text-hover-primary">
																			박성민
																			<span class="badge badge-light fs-8 fw-semibold ms-2">개발이사</span>
																			</a>
																			<div class="text-muted">smith@bizstory.co.kr</div>
																		</div>
																	</div>
																	<div class="d-flex">
																		<div class="text-end">
																			<div class="fs-7 text-dark">총 업무처리 : 16</div>
																			<div class="fs-7 text-dark">총 접수처리 : 20</div>
																		</div>
																	</div>
																</div>
																<!--// User -->
															</div>
															<!--// List -->
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--// Row -->
									</div>
									<!--// Col -->
								</div>
								<!--// Row -->


							</div>
							<!--// Content container -->
						</div>
						<!--// Content -->
					</div>
					<!--// Content wrapper -->
					<?php
					include_once("footer.php");
					?>
				</div>
				<!--// Main -->
			</div>
			<!--// Wrapper -->
		</div>
		<!--// Page -->
	</div>
	<!--// App -->
	<?php
	include_once("modal.php");
	?>
</body>
<!--// Body -->
</html>