<?php
require('Views/login.php');
require('Views/register.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand me-2" href="/restaurantmanager"><img src="public/images/logo.png" height="44" alt="" loading="lazy"></a>

		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtons" aria-controls="navbarButtons" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarButtons">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

			<div class="d-flex align-items-center">
				<button type="button" class="btn btn-link px-3 me-2">TRANG CHỦ</button>
				<button type="button" class="btn btn-link px-3 me-2">GIỚI THIỆU</button>

				<a class="btn btn-outline-primary btn-rounded" href="" data-mdb-ripple-color="dark" role="button" data-mdb-toggle="modal" data-mdb-target="#login">ĐĂNG NHẬP</a>

				<a class="btn btn-primary btn-rounded" href="" data-mdb-ripple-color="dark" role="button" data-mdb-toggle="modal" data-mdb-target="#register">ĐĂNG KÝ MIỄN PHÍ</a>
			</div>
		</div>
	</div>
</nav>

