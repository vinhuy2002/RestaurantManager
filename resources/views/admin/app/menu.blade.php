<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/User/trangchu">
		<img src="{{ URL('images2/spatula1.svg') }}" height="70">
	</a>


	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">Chức năng </div>

	<li class="nav-item">
		<a class="nav-link" href="/User/trangchu">
			<i class="fas fa-home"></i>
			<span>Trang chủ</span>
		</a>
	</li>
	<!-- Nav Item - Pages Collapse Menu -->
	@if (!Session::get('CheckRole'))
	<li class="nav-item">
		<a class="nav-link" href="/User/monan">
			<i class="fas fa-utensils"></i>
			<span>Quản lý Món ăn</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="/User/ban">
			<i class="fas fa-table"></i>
			<span>Quản lý Bàn</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="/User/datmon">
			<i class="fas fa-store"></i>
			<span>Quản lý Đặt món</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="/User/nguyenlieu">
			<i class="fas fa-cannabis"></i>
			<span>Quản lý Nguyên liệu</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="/User/lichlamviec">
			<i class="far fa-calendar-alt"></i>
			<span>Lịch làm việc</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="/User/chucvu">
			<i class="fas fa-list"></i>
			<span>Quản lý Chức vụ</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="/User/nhanvien">
			<i class="fas fa-users"></i>
			<span>Quản lý Nhân viên</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="/User/doanhthu">
			<i class="fas fa-chart-line"></i>
			<span>Quản lý Doanh thu</span>
		</a>
	</li>


	@else
		@if (str_contains(Session::get('CheckRole'),'Món ăn'))
		<li class="nav-item">
			<a class="nav-link" href="/User/monan">
				<i class="fas fa-utensils"></i>
				<span>Quản lý Món ăn</span>
			</a>
		</li>
		@endif

		@if (str_contains(Session::get('CheckRole'),'Bàn'))
		<li class="nav-item">
			<a class="nav-link" href="/User/ban">
				<i class="fas fa-table"></i>
				<span>Quản lý Bàn</span>
			</a>
		</li>
		@endif

		@if (str_contains(Session::get('CheckRole'),'Đặt món'))
		<li class="nav-item">
			<a class="nav-link" href="/User/datmon">
				<i class="fas fa-store"></i>
				<span>Quản lý Đặt món</span>
			</a>
		</li>
		@endif

		@if (str_contains(Session::get('CheckRole'),'Nguyên liệu'))
		<li class="nav-item">
			<a class="nav-link" href="/User/nguyenlieu">
				<i class="fas fa-cannabis"></i>
				<span>Quản lý Nguyên liệu</span>
			</a>
		</li>
		@endif

		@if (str_contains(Session::get('CheckRole'),'Lịch làm việc'))
		<li class="nav-item">
			<a class="nav-link" href="/User/lichlamviec">
				<i class="far fa-calendar-alt"></i>
				<span>Lịch làm việc</span>
			</a>
		</li>
		@endif
		
		@if (str_contains(Session::get('CheckRole'),'Chức vụ'))
		<li class="nav-item">
			<a class="nav-link" href="/User/chucvu">
				<i class="fas fa-list"></i>
				<span>Quản lý Chức vụ</span>
			</a>
		</li>
		@endif

		@if (str_contains(Session::get('CheckRole'),'Nhân viên'))
		<li class="nav-item">
			<a class="nav-link" href="/User/nhanvien">
				<i class="fas fa-users"></i>
				<span>Quản lý Nhân viên</span>
			</a>
		</li>
		@endif

		@if (str_contains(Session::get('CheckRole'),'Doanh Thu'))
		<li class="nav-item">
			<a class="nav-link" href="/User/doanhthu">
				<i class="fas fa-chart-line"></i>
				<span>Quản lý Doanh thu</span>
			</a>
		</li>
		@endif
	@endif



	<br>
	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->

