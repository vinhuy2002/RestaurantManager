<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" aria-label="Slide 1" class="active" aria-current="true" ></button>
		<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
	</div>

	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ URL('images1/banner0.jpg') }}" class="d-block w-100" alt="..."/>

			<div class="carousel-caption d-none d-md-block">
				<h5>Restaurant Manager</h5>
				<p>Quản lý nhanh chóng và tiện lợi nhà hàng của bạn.</p>
			</div>
		</div>

		<div class="carousel-item">
			<img src="{{ URL('images1/banner1.jpg') }}" class="d-block w-100" alt="..."/>
			<div class="carousel-caption d-none d-md-block">
				<h5>Restaurant Manager</h5>
				<p>Chúng tôi cố gắng giúp bạn quản lý nhà hàng của mình dễ dàng và hiệu quả nhất.</p>
			</div>
		</div>

		<div class="carousel-item">
			<img src="{{ URL('images1/banner2.jpg') }}" class="d-block w-100" alt="..."/>

			<!-- <div class="carousel-caption d-none d-md-block">
				<h5>Restaurant Manager</h5>
				<p>Rất vui vì bạn đang sử dụng dịch vụ của chúng tôi.</p>
			</div> -->
		</div>
	</div>

	<button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>