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
								<!-- 공지사항 -->
								<div class="d-flex align-items-center rounded p-4 mb-6 border border-gray-300 bg-light-primary">
									<div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6">
										<i class="ki-duotone ki-notepad-bookmark fs-3x text-info  position-absolute">
										<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
										</i>
									</div>
									<div class="text-gray-700 fs-6 lh-lg">
										애플의 2020년 정책 변경으로 인한 앱 업데이트 공지 입니다. <a href="#" class="ms-2">바로가기</a>
									</div>
								</div>
								<!--// 공지사항 -->

								<!-- Row -->
								<div class="row g-8">
									<!-- Col -->
									<div class="col-md-4">
										<!-- 사용자 정보 -->
										<div class="card h-md-100" dir="ltr">
											<div class="card-body d-flex flex-column flex-center">
												<!-- Heading-->
												<div class="mb-2">
													<h1 class="fs-2 fw-normal text-gray-600 text-center lh-base">
														<span class="fw-semibold text-gray-800">김지훈</span>
														<span class="badge badge-light-primary ms-2 f-6">과장</span>
													</h1>
													<div class="py-4 text-center">
														<div class="bg-warning symbol symbol-80px symbol-lg-150px symbol-circle mb-4">
															<img src="assets/media/avatars/300-5.png" class="p-2" alt="">
														</div>
													</div>
												</div>
												<!-- Heading-->

												<!-- Links-->
												<div class="text-center mb-1">
													<a class="btn btn-sm btn-danger me-2" href="#">
													퇴근하기
													</a>
													<a class="btn btn-sm btn-light" href="#">
													정보수정
													</a>
												</div>
												<!-- Links-->
											</div>
										</div>
										<!--// 사용자 정보 -->
									</div>
									<!--// Col -->


									<!-- Col -->
									<div class="col-md-4">
										<!-- 현재 업무현황 -->
										<div class="card card-flush h-xl-100">
											<div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-150px bg-warning bg-vector-1" data-bs-theme="light">
												<h3 class="card-title align-items-start flex-column text-white pt-5">
													<span class="fw-semibold fs-4 mb-3">현재 업무현황</span>
												</h3>
												<div class="card-toolbar pt-5">
													<!-- Menu-->
													<button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
													<i class="ki-outline ki-dots-square fs-4"></i>
													</button>
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">
															일정
															</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">
															업무
															</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">
															쪽지
															</a>
														</div>
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3">
															자기정보
															</a>
														</div>
													</div>
													<!-- Menu-->
												</div>
											</div>
											<div class="card-body mt-n20">
												<!-- Stats-->
												<div class="mt-n20 position-relative">
													<!-- Row-->
													<div class="row g-3 g-lg-6">
														<!-- Col-->
														<div class="col-6">
															<!-- Items-->
															<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
																<!-- Symbol-->
																<div class="symbol symbol-30px me-5 mb-4">
																	<span class="symbol-label">
																	<i class="ki-solid ki-code fs-1 text-warning"></i>
																	</span>
																</div>
																<!-- Symbol-->
																<!-- Stats-->
																<div class="m-0">
																	<!-- Number-->
																	<span class="text-gray-700 fw-bolder d-block fs-2x lh-1 ls-n1 mb-1">37</span>
																	<!-- Number-->
																	<!-- Desc-->
																	<span class="text-gray-500 fs-6">총 업무처리</span>
																	<!-- Desc-->
																</div>
																<!-- Stats-->
															</div>
															<!-- Items-->
														</div>
														<!-- Col-->
														<!-- Col-->
														<div class="col-6">
															<!-- Items-->
															<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
																<!-- Symbol-->
																<div class="symbol symbol-30px me-5 mb-4">
																	<span class="symbol-label">
																	<i class="ki-solid ki-notepad-edit fs-1 text-warning"></i>
																	</span>
																</div>
																<!-- Symbol-->
																<!-- Stats-->
																<div class="m-0">
																	<!-- Number-->
																	<span class="text-gray-700 fw-bolder d-block fs-2x lh-1 ls-n1 mb-1">6</span>
																	<!-- Number-->
																	<!-- Desc-->
																	<span class="text-gray-500 fs-6">총 접수처리</span>
																	<!-- Desc-->
																</div>
																<!-- Stats-->
															</div>
															<!-- Items-->
														</div>
														<!-- Col-->
														<!-- Col-->
														<div class="col-6">
															<!-- Items-->
															<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
																<!-- Symbol-->
																<div class="symbol symbol-30px me-5 mb-4">
																	<span class="symbol-label">
																	<i class="ki-solid ki-messages fs-1 text-warning"></i>
																	</span>
																</div>
																<!-- Symbol-->
																<!-- Stats-->
																<div class="m-0">
																	<!-- Number-->
																	<span class="text-gray-700 fw-bolder d-block fs-2x lh-1 ls-n1 mb-1">4,7</span>
																	<!-- Number-->
																	<!-- Desc-->
																	<span class="text-gray-500 fs-6">진행업무</span>
																	<!-- Desc-->
																</div>
																<!-- Stats-->
															</div>
															<!-- Items-->
														</div>
														<!-- Col-->
														<!-- Col-->
														<div class="col-6">
															<!-- Items-->
															<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
																<!-- Symbol-->
																<div class="symbol symbol-30px me-5 mb-4">
																	<span class="symbol-label">
																	<i class="ki-solid ki-message-text fs-1 text-warning"></i>
																	</span>
																</div>
																<!-- Symbol-->
																<!-- Stats-->
																<div class="m-0">
																	<!-- Number-->
																	<span class="text-gray-700 fw-bolder d-block fs-2x lh-1 ls-n1 mb-1">822</span>
																	<!-- Number-->
																	<!-- Desc-->
																	<span class="text-gray-500 fs-6">진행접수</span>
																	<!-- Desc-->
																</div>
																<!-- Stats-->
															</div>
															<!-- Items-->
														</div>
														<!-- Col-->
													</div>
													<!-- Row-->
												</div>
												<!-- Stats-->
											</div>
										</div>
										<!--// 현재 업무현황 -->
									</div>
									<!--// Col -->


									<!-- Col -->
									<div class="col-md-4">
										<!-- 비즈스토리 사용내역 & 배너 -->
										<div id="kt_sliders_widget_3_slider" class="card card-flush carousel slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
											<!-- 비즈스토리 사용내역 -->
											<div class="card-header pt-5 px-8 mb-5">
												<!-- Title-->
												<h3 class="card-title align-items-start flex-column w-75">
													<span class="card-label fw-semibold text-dark fs-5">비즈스토리 사용내역</span>
													<span class="text-gray-400 mt-2 fw-normal fs-8">시작일/만기일: 2012.02.20/2017.02.20</span>
													<span class="d-block h-8px w-100 bg-gray-300  rounded mt-2">
														<span class="d-block bg-danger rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></span>
													</span>
												</h3>
												<!-- Title-->
												<!-- Toolbar-->
												<div class="card-toolbar">
													<div class="d-flex justify-content-end">
														<a href="#kt_sliders_widget_3_slider" class="carousel-control-prev position-relative me-5 active" role="button" data-bs-slide="prev">
														<i class="ki-outline ki-left-square fs-2x text-gray-400"></i>                </a>
														<a href="#kt_sliders_widget_3_slider" class="carousel-control-next position-relative me-1" role="button" data-bs-slide="next">
														<i class="ki-outline ki-right-square fs-2x text-gray-400"></i>                </a>
													</div>
												</div>
												<!-- Toolbar-->
											</div>
											<!--// 비즈스토리 사용내역 -->

											<!-- 배너 -->
											<div class="card-body p-0 px-8">
												<!-- Carousel-->
												<div class="carousel-inner">
													<!-- Item -->
													<div class="carousel-item active show">
														<a href="#"><img src="http://www.bizstory.co.kr/data/banner/banner_4_1.jpg" class="w-100" alt=""></a>
													</div>
													<!-- Item -->
													<!-- Item -->
													<div class="carousel-item ">
														<a href="#"><img src="http://www.bizstory.co.kr/data/banner/banner_5_1.jpg" class="w-100" alt=""></a>
													</div>
													<!-- Item -->
													<!-- Item -->
													<div class="carousel-item ">
														<a href="#"><img src="http://www.bizstory.co.kr/data/banner/banner_6_1.jpg" class="w-100" alt=""></a>
													</div>
													<!-- Item -->
												</div>
												<!-- Carousel-->
											</div>
											<!--// 배너 -->
										</div>
										<!--// 비즈스토리 사용내역 & 배너 -->
									</div>
									<!--// Col -->


									<!-- Col -->
									<div class="col-md-6">
										<div class="card card-flush h-xl-100">
											<div class="hover-scroll-x">
												<div class="d-grid">
													<ul class="nav nav-pills nav-pills-custom row position-relative my-6 mx-8 flex-nowrap text-nowrap" role="tablist">
														<!-- 접수 미처리현황 -->
														<li class="nav-item col-4 mx-0 p-0" role="presentation">
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100 active" data-bs-toggle="pill" href="#workList1" aria-selected="true" role="tab">
																<span class="nav-text text-gray-800 fw-semibold fs-6 mb-3">
																<i class="ki-solid ki-notepad-edit fw-semibold fs-4 me-1"></i> 접수 미처리현황
																<span class="fs-6 text-gray-400 ms-2 d-none d-xxl-inline-block">19</span>
																</span>
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-3px bg-primary rounded"></span>
															</a>
														</li>
														<!--// 접수 미처리현황 -->

														<!-- 업무 리스트 -->
														<li class="nav-item col-4 mx-0 px-0" role="presentation">
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#workList2" aria-selected="false" role="tab" tabindex="-1">
																<span class="nav-text text-gray-800 fw-semibold fs-6 mb-3">
																<i class="ki-solid ki-code fw-semibold fs-4 me-1"></i> 업무 리스트
																<span class="fs-6 text-gray-400 ms-2 d-none d-xxl-inline-block">8</span>
																</span>
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-3px bg-primary rounded"></span>
															</a>
														</li>
														<!--// 업무 리스트 -->

														<!-- 프로젝트 리스트 -->
														<li class="nav-item col-4 mx-0 px-0" role="presentation">
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#workList3" aria-selected="false" role="tab" tabindex="-1">
																<span class="nav-text text-gray-800 fw-semibold fs-6 mb-3">
																<i class="ki-solid ki-office-bag fw-semibold fs-4 me-1"></i> 프로젝트 리스트
																<span class="fs-6 text-gray-400 ms-2 d-none d-xxl-inline-block">7</span>
																</span>
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-3px bg-primary rounded"></span>
															</a>
														</li>
														<!--// 프로젝트 리스트 -->
													</ul>
												</div>
											</div>
											<div class="card-body pt-0 ps-8 pe-0">
												<div class="tab-content hover-scroll-overlay-y pe-4 me-4 xs-h-auto" style="height: 400px">
													<!--접수 미처리현황 -->
													<div class="tab-pane fade show active" id="workList1" role="tabpanel">
														<div class="office-group">
															<!-- Loop -->
															<div class="loop mb-6 pb-6 mb-xl-9 border-bottom border-gray-300 border-bottom-dashed">
																<!-- 등록자, 분류 -->
																<div class="d-flex flex-stack mb-3">
																	<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">동원대학교 오정민</span><br />(2023-04-10 14:27)</div>
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
																	<div class="text-gray-400 fw-normal fs-8"><span class=" fs-6 text-dark me-1">동원대학교 오정민</span><br />(2023-04-10 14:27)</div>
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
															<a href="#" class="btn btn-warning er w-100 fs-7 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">새 접수 등록</a>
														</div>
													</div>
													<!--// 접수 미처리현황 -->

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
															<a href="#" class="btn btn-primary er w-100 fs-7 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">새 업무 등록</a>
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
															<a href="#" class="btn btn-success er w-100 fs-7 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">새 프로젝트 등록</a>
														</div>
														<!--// 프로젝트 리스트 -->
													</div>
													<!--// Tab pane-->
												</div>
											</div>
										</div>
									</div>
									<!--// Col -->


									<!-- Col -->
									<div class="col-md-6">
										<!-- 이력 -->
										<div class="card card-flush h-xl-100">
											<div class="hover-scroll-x">
												<div class="d-grid">
													<ul class="nav nav-pills nav-pills-custom row position-relative flex-nowrap text-nowrap mx-8 my-6" role="tablist">
														<!-- Item -->
														<li class="nav-item col-4 mx-0 p-0" role="presentation">
															<!-- Link-->
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100 active" data-bs-toggle="pill" href="#timelineList1" aria-selected="true" role="tab">
																<!-- Subtitle-->
																<span class="nav-text text-gray-800 fw-semibold fs-6 mb-3">
																<i class="ki-solid ki-notepad-edit fw-semibold fs-4 me-1"></i> 접수 이력
																<span class="fs-6 text-gray-400 ms-2 d-none d-xxl-inline-block">15</span>
																</span>
																<!-- Subtitle-->
																<!-- Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-3px bg-primary rounded"></span>
																<!-- Bullet-->
															</a>
															<!-- Link-->
														</li>
														<!-- Item -->
														<!-- Item -->
														<li class="nav-item col-4 mx-0 px-0" role="presentation">
															<!-- Link-->
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#timelineList2" aria-selected="false" role="tab" tabindex="-1">
																<!-- Subtitle-->
																<span class="nav-text text-gray-800 fw-semibold fs-6 mb-3">
																<i class="ki-solid ki-code fw-semibold fs-4 me-1"></i> 업무 이력
																<span class="fs-6 text-gray-400 ms-2 d-none d-xxl-inline-block">9</span>
																</span>
																<!-- Subtitle-->
																<!-- Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-3px bg-primary rounded"></span>
																<!-- Bullet-->
															</a>
															<!-- Link-->
														</li>
														<!-- Item -->
														<!-- Item -->
														<li class="nav-item col-4 mx-0 px-0" role="presentation">
															<!-- Link-->
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#timelineList3" aria-selected="false" role="tab" tabindex="-1">
																<!-- Subtitle-->
																<span class="nav-text text-gray-800 fw-semibold fs-6 mb-3">
																<i class="ki-solid ki-office-bag fw-semibold fs-4 me-1"></i> 프로젝트 이력
																<span class="fs-6 text-gray-400 ms-2 d-none d-xxl-inline-block">7</span>
																</span>
																<!-- Subtitle-->
																<!-- Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-3px bg-primary rounded"></span>
																<!-- Bullet-->
															</a>
															<!-- Link-->
														</li>
														<!-- Item -->
													</ul>
												</div>
											</div>
											<div class="card-body pt-0 ps-8 pe-0">
												<!--Tab content-->
												<div class="tab-content hover-scroll-overlay-y pe-4 me-4 xs-h-auto" style="height: 400px">
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
									<!--// Col -->
									<!-- Col -->
									<div class="col-md-6">
										<div class="card card-flush h-xl-100">
											<!-- Col header -->
											<div class="card-header pt-6 px-8">
												<!-- Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="fw-semibold fs-4">최근접속 회원정보</span>
												</h3>
												<!-- Title-->
												<!-- Toolbar-->
												<div class="card-toolbar">
													<span class="fs-6 text-gray-400 ms-2">10</span>
												</div>
												<!-- Toolbar-->
											</div>
											<!--// Col header -->
											<div class="card-body pt-0 px-0">
												<!-- List -->
												<div class="px-8 hover-scroll-overlay-y pe-4 me-4 mb-2 xs-h-auto" style="height: 295px">
													<!-- Item -->
													<div class="border border-dashed border-gray-300 rounded px-8 py-3 mb-3 bg-hover-light-primary">
														<!-- Info-->
														<div class="d-flex flex-stack mb-1">
															<!-- Wrapper-->
															<div class="me-3">
																<!-- Icon-->
																<div class="symbol symbol-35px symbol-circle ms-n1 me-3">
																	<img alt="Pic" src="assets/media/avatars/300-13.png">
																</div>
																<!-- Icon-->
																<!-- Title-->
																<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-semibold">김원홍</a>
																<span class="badge badge-light-primary ms-2">개발이사</span>
																<!-- Title-->
															</div>
															<!-- Wrapper-->
															<!-- Action-->
															<div class="m-0">
																<!-- Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
																	data-kt-menu-trigger="click"
																	data-kt-menu-placement="bottom-end"
																	data-kt-menu-overflow="true">
																<i class="ki-outline ki-dots-square fs-1"></i>
																</button>
																<!-- Menu 2-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true">
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">연락처 : <a href="tel:010-8802-9444" class="text-primary">010-8802-9444</a></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">총업무처리 : <span class="text-gray-800">18</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">총접수처리 : <span class="text-gray-800">4</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">진행업무 : <span class="text-gray-800">12</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">진행접수 : <span class="text-gray-800">4</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3 mt-4">
																		<a href="#" class="btn btn-primary btn-sm px-4 w-100">
																		쪽지 보내기
																		</a>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="btn btn-success btn-sm px-4 w-100">
																		메일 보내기
																		</a>
																	</div>
																	<!-- Menu item-->
																</div>
																<!-- Menu 2-->
																<!-- Menu-->
															</div>
															<!-- Action-->
														</div>
														<!-- Info-->
														<!-- Customer-->
														<div class="d-xl-flex flex-xl-stack mb-1">
															<a href="mailto:smith@bizstory.co.kr" class="text-gray-800 text-hover-primary">smith@bizstory.co.kr</a>
															<div class="text-gray-600 fs-8 mt-1 mt-xl-0">Last login : 2023/10/11 10:28</div>
														</div>
														<!-- Customer-->
													</div>
													<!-- Item -->
													<!-- Item -->
													<div class="border border-dashed border-gray-300 rounded px-8 py-3 mb-3 bg-hover-light-primary">
														<!-- Info-->
														<div class="d-flex flex-stack mb-1">
															<!-- Wrapper-->
															<div class="me-3">
																<!-- Icon-->
																<div class="symbol symbol-35px symbol-circle ms-n1 me-3">
																	<img alt="Pic" src="assets/media/avatars/300-14.png">
																</div>
																<!-- Icon-->
																<!-- Title-->
																<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-semibold">감우성</a>
																<span class="badge badge-light-primary ms-2">부장</span>
																<!-- Title-->
															</div>
															<!-- Wrapper-->
															<!-- Action-->
															<div class="m-0">
																<!-- Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
																	data-kt-menu-trigger="click"
																	data-kt-menu-placement="bottom-end"
																	data-kt-menu-overflow="true">
																<i class="ki-outline ki-dots-square fs-1"></i>
																</button>
																<!-- Menu 2-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true">
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">연락처 : <a href="tel:010-8802-9444" class="text-primary">010-8802-9444</a></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">총업무처리 : <span class="text-gray-800">18</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">총접수처리 : <span class="text-gray-800">4</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">진행업무 : <span class="text-gray-800">12</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">진행접수 : <span class="text-gray-800">4</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3 mt-4">
																		<a href="#" class="btn btn-primary btn-sm px-4 w-100">
																		쪽지 보내기
																		</a>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="btn btn-success btn-sm px-4 w-100">
																		메일 보내기
																		</a>
																	</div>
																	<!-- Menu item-->
																</div>
																<!-- Menu 2-->
																<!-- Menu-->
															</div>
															<!-- Action-->
														</div>
														<!-- Info-->
														<!-- Customer-->
														<div class="d-xl-flex flex-xl-stack mb-1">
															<a href="mailto:smith@bizstory.co.kr" class="text-gray-800 text-hover-primary">smith@bizstory.co.kr</a>
															<div class="text-gray-600 fs-8 mt-1 mt-xl-0">Last login : 2023/10/11 10:28</div>
														</div>
														<!-- Customer-->
													</div>
													<!-- Item -->
													<!-- Item -->
													<div class="border border-dashed border-gray-300 rounded px-8 py-3 mb-3 bg-hover-light-primary">
														<!-- Info-->
														<div class="d-flex flex-stack mb-1">
															<!-- Wrapper-->
															<div class="me-3">
																<!-- Icon-->
																<div class="symbol symbol-35px symbol-circle ms-n1 me-3">
																	<img alt="Pic" src="assets/media/avatars/300-15.png">
																</div>
																<!-- Icon-->
																<!-- Title-->
																<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-semibold">이나영</a>
																<span class="badge badge-light-primary ms-2">과장</span>
																<!-- Title-->
															</div>
															<!-- Wrapper-->
															<!-- Action-->
															<div class="m-0">
																<!-- Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
																	data-kt-menu-trigger="click"
																	data-kt-menu-placement="bottom-end"
																	data-kt-menu-overflow="true">
																<i class="ki-outline ki-dots-square fs-1"></i>
																</button>
																<!-- Menu 2-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true">
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">연락처 : <a href="tel:010-8802-9444" class="text-primary">010-8802-9444</a></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">총업무처리 : <span class="text-gray-800">18</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">총접수처리 : <span class="text-gray-800">4</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">진행업무 : <span class="text-gray-800">12</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">진행접수 : <span class="text-gray-800">4</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3 mt-4">
																		<a href="#" class="btn btn-primary btn-sm px-4 w-100">
																		쪽지 보내기
																		</a>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="btn btn-success btn-sm px-4 w-100">
																		메일 보내기
																		</a>
																	</div>
																	<!-- Menu item-->
																</div>
																<!-- Menu 2-->
																<!-- Menu-->
															</div>
															<!-- Action-->
														</div>
														<!-- Info-->
														<!-- Customer-->
														<div class="d-xl-flex flex-xl-stack mb-1">
															<a href="mailto:smith@bizstory.co.kr" class="text-gray-800 text-hover-primary">smith@bizstory.co.kr</a>
															<div class="text-gray-600 fs-8 mt-1 mt-xl-0">Last login : 2023/10/11 10:28</div>
														</div>
														<!-- Customer-->
													</div>
													<!-- Item -->
													<!-- Item -->
													<div class="border border-dashed border-gray-300 rounded px-8 py-3 mb-3 bg-hover-light-primary">
														<!-- Info-->
														<div class="d-flex flex-stack mb-1">
															<!-- Wrapper-->
															<div class="me-3">
																<!-- Icon-->
																<div class="symbol symbol-35px symbol-circle ms-n1 me-3">
																	<img alt="Pic" src="assets/media/avatars/300-16.png">
																</div>
																<!-- Icon-->
																<!-- Title-->
																<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-semibold">김원홍</a>
																<span class="badge badge-light-primary ms-2">대리</span>
																<!-- Title-->
															</div>
															<!-- Wrapper-->
															<!-- Action-->
															<div class="m-0">
																<!-- Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
																	data-kt-menu-trigger="click"
																	data-kt-menu-placement="bottom-end"
																	data-kt-menu-overflow="true">
																<i class="ki-outline ki-dots-square fs-1"></i>
																</button>
																<!-- Menu 2-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true">
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">연락처 : <a href="tel:010-8802-9444" class="text-primary">010-8802-9444</a></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">총업무처리 : <span class="text-gray-800">18</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">총접수처리 : <span class="text-gray-800">4</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">진행업무 : <span class="text-gray-800">12</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3 py-1">
																			<span class="text-gray-600 fs-7 fw-normal">진행접수 : <span class="text-gray-800">4</span></span>
																		</div>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3 mt-4">
																		<a href="#" class="btn btn-primary btn-sm px-4 w-100">
																		쪽지 보내기
																		</a>
																	</div>
																	<!-- Menu item-->
																	<!-- Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="btn btn-success btn-sm px-4 w-100">
																		메일 보내기
																		</a>
																	</div>
																	<!-- Menu item-->
																</div>
																<!-- Menu 2-->
																<!-- Menu-->
															</div>
															<!-- Action-->
														</div>
														<!-- Info-->
														<!-- Customer-->
														<div class="d-xl-flex flex-xl-stack mb-1">
															<a href="mailto:smith@bizstory.co.kr" class="text-gray-800 text-hover-primary">smith@bizstory.co.kr</a>
															<div class="text-gray-600 fs-8 mt-1 mt-xl-0">Last login : 2023/10/11 10:28</div>
														</div>
														<!-- Customer-->
													</div>
													<!-- Item -->
												</div>
												<!--// List -->
											</div>
										</div>
									</div>
									<!--// Col -->
									<!-- Col -->
									<div class="col-md-6">
										<!-- 일정목록 -->
										<div class="card card-flush h-xl-100">
											<!-- 등록자, 분류 -->
											<div class="card-header border-0 pt-5 px-8">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-semibold text-dark">일정목록</span>
													<span class="text-muted mt-1 fw-normal fs-7">총 2건의 일정</span>
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
											<div class="card-body pt-2 px-0">
												<!-- Nav -->
												<ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-6 px-8">
													<!-- Nav item -->
													<li class="nav-item p-0 mx-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-2 min-w-35px p-2 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
														<span class="fs-8 fw-semibold">토</span>
														<span class="fs-7 fw-semibold">8</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 mx-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-2 min-w-35px p-2 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
														<span class="fs-8 fw-semibold">일</span>
														<span class="fs-7 fw-semibold">9</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 mx-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-2 min-w-35px p-2 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
														<span class="fs-8 fw-semibold">월</span>
														<span class="fs-7 fw-semibold">10</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 mx-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-2 min-w-35px p-2 btn-active-warning active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
														<span class="fs-8 fw-semibold">화</span>
														<span class="fs-7 fw-semibold">11</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 mx-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-2 min-w-35px p-2 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
														<span class="fs-8 fw-semibold">수</span>
														<span class="fs-7 fw-semibold">12</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 mx-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-2 min-w-35px p-2 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
														<span class="fs-8 fw-semibold">목</span>
														<span class="fs-7 fw-semibold">13</span>
														</a>
													</li>
													<!--// Nav item -->
													<!-- Nav item -->
													<li class="nav-item p-0 mx-0">
														<a class="nav-link btn d-flex flex-column flex-center rounded-2 min-w-35px p-2 btn-active-warning" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
														<span class="fs-8 fw-semibold">금</span>
														<span class="fs-7 fw-semibold">14</span>
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
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-8 bg-success"></span>
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
													</div>
													<!--// Tap pane -->
													<!-- Tap pane -->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
														</div>
														<!--// Loop -->
														<!-- Loop -->
														<div class="d-flex align-items-center border border-dashed border-gray-300 rounded pe-8 py-4 mb-4 bg-hover-light-primary">
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
															<a href="#" class="btn btn-dark btn-sm px-4">보기</a>
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