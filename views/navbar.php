<?php
	require('Views/login.php');
	require('Views/register.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand me-2" href="/restaurantmanager">Restaurant Manager</a>

		<div class="collapse navbar-collapse">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

			<div class="d-flex align-items-center">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<button type="button" class="btn btn-link">TRANG CHỦ</button>
						<button type="button" class="btn btn-link">GIỚI THIỆU</button>

						<a class="btn btn-outline-primary btn-rounded" href="" data-mdb-ripple-color="dark" role="button" data-mdb-toggle="modal" data-mdb-target="#login">ĐĂNG NHẬP</a>
						<a class="btn btn-primary btn-rounded" href="" data-mdb-ripple-color="dark" role="button" data-mdb-toggle="modal" data-mdb-target="#register">ĐĂNG KÝ MIỄN PHÍ</a>
					</li>
				</ul>

			</div>
		</div>
	</div>
</nav>

