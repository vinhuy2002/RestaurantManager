<!-- Header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Manager</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ URL('images2/spatula2.svg') }}">

    <!-- Link -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>

    <!-- Link -->


    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ URL('css/vinhuy.css') }}">

    <!-- Custom CSS -->

 
</head>
<body style="padding: 0; margin: 0;">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand me-2" href="/"><img src="{{ URL('images1/logo.png'); }}" height="44" alt="" loading="lazy"></a>
    
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtons" aria-controls="navbarButtons" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarButtons">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
    
                <div class="d-flex align-items-center">
                    <a href="/"><button type="button" class="btn btn-link px-3 me-2">TRANG CHỦ</button></a>
                    <a href="/GioiThieu"><button type="button" class="btn btn-link px-3 me-2">GIỚI THIỆU</button></a>
					<a href="/NhaHang"><button type="button" class="btn btn-link px-3 me-2">NHÀ HÀNG</button></a>

					{{-- @if (Route::has('login'))
						@auth
                    		<a href="{{ url('/User/trangchu') }}" class="btn btn-primary btn-rounded">Nhà hàng của bạn</a>
						@else
							<a class="btn btn-outline-primary btn-rounded" href="{{ route('auth.login') }}">ĐĂNG NHẬP</a>
							&ensp;
							@if (Route::has('register'))
								<a class="btn btn-primary btn-rounded" href="{{ route('auth.register') }}">ĐĂNG KÝ MIỄN PHÍ</a>
							@endif
						@endauth
            		@endif --}}
					{{-- <a class="btn btn-outline-primary btn-rounded" href="{{ route('auth.login') }}">ĐĂNG NHẬP</a>
						&ensp;
						<a class="btn btn-primary btn-rounded" href="{{ route('auth.register') }}">ĐĂNG KÝ MIỄN PHÍ</a> --}}

					@if (Session::get('DangNhap'))
						<a href="{{ url('/User/trangchu') }}" class="btn btn-primary btn-rounded">Nhà hàng của bạn</a>
					@else
						<a class="btn btn-outline-primary btn-rounded" href="{{ route('auth.login') }}">ĐĂNG NHẬP</a>
						&ensp;
						<a class="btn btn-primary btn-rounded" href="{{ route('auth.register') }}">ĐĂNG KÝ MIỄN PHÍ</a>
					@endif

                </div>
            </div>
        </div>
    </nav>
    <!-- Header -->


    <!-- Content -->

    @yield('content')

    <!-- Content -->


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
	<section class="border-top">
		<div class="container text-center text-md-start mt-5">
			<div class="row mt-3">
				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
					<h6 class="text-uppercase fw-bold mb-4"> Liên hệ </h6>
					<p><i class="fas fa-home me-3"></i> Thừa Thiên - Huế, Việt Nam</p>
					<p>
						<i class="fas fa-envelope me-3"></i>
						restaurantmanagersp@gmail.com
					</p>
					<p><i class="fas fa-phone me-3"></i> +84 964196652</p>
					<p><i class="fas fa-headset me-3"></i> +84 358831047</p><br>
				</div>

				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
					<h6 class="text-uppercase fw-bold mb-4">
						Danh mục
					</h6>

					<p><a href="#!" class="text-reset"><i class="fas fa-angle-right"></i>&nbsp;Quản lý</a></p>
					<p><a href="#!" class="text-reset"><i class="fas fa-angle-right"></i>&nbsp;Giới thiệu</a></p>
					<p><a href="#!" class="text-reset"><i class="fas fa-angle-right"></i>&nbsp;Thanh toán</a></p>
				</div>

				<div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
					<h6 class="text-uppercase fw-bold mb-4">Tài khoản</h6>

					<p><a href="{{ route('auth.register') }}" class="text-reset"><i class="fas fa-angle-right"></i>&nbsp;Đăng ký</a></p>
					<p><a href="{{ route('auth.login') }}" class="text-reset"><i class="fas fa-angle-right"></i>&nbsp;Đăng nhập</a></p>

				</div>


				<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
					<h6 class="text-uppercase fw-bold mb-4">
						Mạng xã hội
					</h6>

					<a href="https://www.facebook.com/IT0902/" class="me-4 text-reset">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="https://www.facebook.com/IT0902/" class="me-4 text-reset">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="https://www.facebook.com/IT0902/" class="me-4 text-reset">
						<i class="fab fa-google"></i>
					</a>
					<a href="https://www.facebook.com/IT0902/" class="me-4 text-reset">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class=" justify-content-center justify-content-lg-between p-4 border-top" style="background-color: #757575;">
		<div class="text-center me-5 d-none d-lg-block">
			<span class="text-center text-white">© 2021 Bản quyền thuộc về:
				<a class="text-white" href="/">&ensp;RestaurantManager (Văn Bằng ~ Vĩnh Uy)</a>
			</span>
		</div>
	</section>
</footer>
<!-- Footer -->


   <!-- Scripts -->

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

   <!-- Scripts -->
</body>
</html>