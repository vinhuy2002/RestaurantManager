<section class="fnavbar">
	<div class="navbar-fixed">
		<nav style="background-color: #5c95ff;">
			<div class="nav-wrapper">
				<a href="/RestaurantManager" class="brand-logo">RestaurantManager</a>
				<a href="/RestaurantManager" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				
				<ul class="right hide-on-med-and-down">
					<li><a href="/RestaurantManager" class="hvr-grow">Trang chủ</a></li>
					
					<li><a class="dropdown-trigger" href="#!" data-target="dropdown">Quản lý<i class="material-icons right">arrow_drop_down</i></a></li>
					<ul id="dropdown" class="dropdown-content">
						<li><a href="foods.php" class="hvr-grow-a">Món ăn</a></li>
						<li><a href="waiting.php" class="hvr-grow-a">Thực đơn</a></li>
						<li><a href="waiting.php" class="hvr-grow-a">Khách hàng</a></li>
						<li><a href="waiting.php" class="hvr-grow-a">Đầu bếp</a></li>
						<li><a href="waiting.php" class="hvr-grow-a">Nhân viên</a></li>
						<li><a href="waiting.php" class="hvr-grow-a">Tài chính</a></li>
					</ul>

					<li><a href="/RestaurantManager/about-restaurant-manager.php" class="hvr-grow">Về chúng tôi</a></li>

					<?php

					if (isset($_SESSION['user'])) {
						echo '<li><a href="#" class="hvr-grow">Hi, '.$_SESSION['user'].'</a></li>
						<li><a href="logout.php" class="hvr-grow">Đăng xuất</a></li>';
					} else {
						echo '<li><a href="#" class="hvr-grow modal-trigger" data-target="modal1">Đăng nhập</a></li>
						<li><a href="#" class="hvr-grow modal-trigger" data-target="modal2">Đăng ký</a></li>';
					}

					?>
				</ul>
			</div>
		</nav>
	</div>

	<ul class="sidenav" id="mobile-demo">
		<li><a href="/RestaurantManager" class="hvr-grow">Trang chủ</a></li>

		<li><a href="foods.php" class="hvr-grow">Món ăn</a></li>
		<li><a href="waiting.php" class="hvr-grow">Thực đơn</a></li>
		<li><a href="waiting.php" class="hvr-grow">Khách hàng</a></li>
		<li><a href="waiting.php" class="hvr-grow">Đầu bếp</a></li>
		<li><a href="waiting.php" class="hvr-grow">Nhân viên</a></li>
		<li><a href="waiting.php" class="hvr-grow">Tài chính</a></li>

		<li><a href="/RestaurantManager/about-restaurant-manager.php" class="hvr-grow">Về chúng tôi</a></li>

		<?php

		if (isset($_SESSION['user'])) {
			echo '<li><a href="#">Hi, '.$_SESSION['user'].'</a></li>
			<li><a href="logout.php">Logout</a></li>';
		} else {
			echo '<li><a href="#" class="modal-trigger" data-target="modal1">Login</a></li>
			<li><a href="#" class="modal-trigger" data-target="modal2">Register</a></li>';
		}

		?>
	</ul>
</section>