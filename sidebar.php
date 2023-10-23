<!--  Sidebar -->
<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<!--  Logo -->
	<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
		<!--  Logo image -->
		<a href="index.php">
		<img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-25px app-sidebar-logo-default">
		<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize">
		</a>
		<!--// Logo image -->

		<!--  Sidebar toggle -->
		<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate " data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
			<i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span class="path2"></span></i>
		</div>
		<!--// Sidebar toggle -->
	</div>
	<!--// Logo -->

	<!--  sidebar menu -->
	<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
		<!--  Menu wrapper -->
		<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
			<!--  Menu -->
			<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<!--  업무관리 -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-brifecase-tick fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">업무관리</span><span class="menu-arrow"></span></span>
					<!--  Menu sub -->
					<div class="menu-sub menu-sub-accordion">
						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">나의 업무</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">업무</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">일정</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">쪽지</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">자기정보</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">프로젝트관리</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">직원목록</span></a>
						</div>
						<!--// Menu item -->
					</div>
					<!--// Menu sub -->
				</div>
				<!--// 업무관리 -->


				<!--  고객관리 -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-profile-user fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title">고객관리</span><span class="menu-arrow"></span></span>
					<!--  Menu sub -->
					<div class="menu-sub menu-sub-accordion">
						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">접수목록</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">거래처목록</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">점검보고서</span></a>
						</div>
						<!--// Menu item -->
					</div>
					<!--// Menu sub -->
				</div>
				<!--// 고객관리 -->


				<!--  게시판 -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-message-text fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">게시판</span><span class="menu-arrow"></span></span>
					<!--  Menu sub -->
					<div class="menu-sub menu-sub-accordion">
						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">마케팅자료</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">NAS자료</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">도큐먼트자료</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">기술자료</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">개발자료</span></a>
						</div>
						<!--// Menu item -->
					</div>
					<!--// Menu sub -->
				</div>
				<!--// 게시판 -->


				<!--  운영관리 -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-finance-calculator fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></i></span><span class="menu-title">운영관리</span><span class="menu-arrow"></span></span>
					<!--  Menu sub -->
					<div class="menu-sub menu-sub-accordion">
						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">운영비관리</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">운영비월별</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">재고관리대장</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">유형자산관리대장</span></a>
						</div>
						<!--// Menu item -->
					</div>
					<!--// Menu sub -->
				</div>
				<!--// 운영관리 -->


				<!--  파일센터 -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-file-down fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">파일센터</span><span class="menu-arrow"></span></span>
					<!--  Menu sub -->
					<div class="menu-sub menu-sub-accordion">
						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">타입설정</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">권한설정</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">파일관리</span></a>
						</div>
						<!--// Menu item -->
					</div>
					<!--// Menu sub -->
				</div>
				<!--// 파일센터 -->


				<!--  설정관리 -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">설정관리</span><span class="menu-arrow"></span></span>
					<!--  Menu sub -->
					<div class="menu-sub menu-sub-accordion">
						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">코드관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">지사관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">일정종류</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">회계설정</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">메뉴명관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">업무관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">프로젝트관리</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">회사관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">회사정보</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">회사설정</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">회사소개</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">회사연혁</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">직원관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">직책관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">직원그룹</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">직원등록/수정</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">퇴사직원</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">거래처관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">거래처분류</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">거래처등록/수정</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">삭제거래처</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">접수관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">접수분류</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">접수상태</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">점검항목</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">에이전트관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">타입관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">아이콘관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">배너관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">공지관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">알림관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">상담게시판</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">일반게시판</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">에이전트현황</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">서비스현황</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">이용현황</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">SMS 이력</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">컨텐츠관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">팝업관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">게시판관리</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">통계</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">접수월,일통계</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">거래처별 통계</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">담당자별 통계</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">부서별 통계</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

					</div>
					<!--// Menu sub -->
				</div>
				<!--// 설정관리 -->


				<!--  전문가코너 -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-user-tick fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">전문가코너</span><span class="menu-arrow"></span></span>
					<!--  Menu sub -->
					<div class="menu-sub menu-sub-accordion">
						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">코드설정</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">전문가분류</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">거래처검색분류</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">알림분류</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">상담분류</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">전문가관리</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">거래처검색관리</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">알림관리</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">상담관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">전문가별 상담</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">그외 상담</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->


						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">통계</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">일별건수</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">만족도</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">전문가답변</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

					</div>
					<!--// Menu sub -->
				</div>
				<!--// 전문가코너 -->


				<!--  설정폴더(총관리자용) -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-questionnaire-tablet fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">설정폴더(총관리자용)</span><span class="menu-arrow"></span></span>
					<!--  Menu sub -->
					<div class="menu-sub menu-sub-accordion">
						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">업체관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">업체목록</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">삭제업체</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">업체별에이전트</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">업체분류</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">컨텐츠관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">배너관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">팝업창관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">게시판관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">일반페이지</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">공지관리</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">푸쉬관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">푸쉬공지</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">푸쉬이력</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">등록 ID</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">서비스관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">기본서비스</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">부가서비스</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div class="menu-item">
							<a class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">통계관리</span></a>
						</div>
						<!--// Menu item -->

						<!--  Menu item -->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">설정관리</span><span class="menu-arrow"></span></span>
							<!--  Menu sub -->
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">메뉴관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">도메인관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">총판관리</span></a>
								</div>
								<!--// Menu item -->

								<!--  Menu item -->
								<div class="menu-item">
									<a class="menu-link" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">데모신청</span></a>
								</div>
								<!--// Menu item -->
							</div>
							<!--// Menu sub -->
						</div>
						<!--// Menu item -->

					</div>
					<!--// Menu sub -->
				</div>
				<!--// 설정폴더(총관리자용) -->



				<!--  스토리지 사용량 -->
				<div class="menu-item menu-title my-5">
					<div class="menu-content"><span class="fw-bold text-uppercase text-gray-300 fs-7">스토리지 사용량</span></div>
					<div class="d-flex align-items-center flex-column w-100 px-4">
						<div class="w-100 h-15px bg-gray-800 rounded mb-2">
							<div class="bg-warning rounded h-15px" role="progressbar" style="width: 37%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="fw-semibold fs-8 text-gray-600 w-100 mt-auto">
							<span>15GB 중 <strong class="text-warning fw-bold">2.54GB</strong> 사용</span>
						</div>
					</div>
				</div>
				<!--// 스토리지 사용량 -->
			</div>
			<!--// Menu -->
		</div>
		<!--// Menu wrapper -->
	</div>
	<!--// sidebar menu -->

	<!--  Footer -->
	<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
		<a href="#" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="개선사항이나 질문이 있을 경우 언제든지 문의주세요.">
			<span class="btn-label">
				비즈스토리 건의사항
			</span>
			<i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span class="path2"></span></i>
		</a>
	</div>
	<!--// Footer -->
</div>
<!--// Sidebar -->