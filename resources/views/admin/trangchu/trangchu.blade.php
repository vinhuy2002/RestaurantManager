@extends('admin.index')

@section('admin_content')

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>NHÀ HÀNG XỊN LIỀN</strong>&ensp;
			<i class="fas fa-grin-wink"></i>
		</h4>            
	</div>

	<div class="card-body">
		<div class="row">
			<div class="col-6">
				<img src="{{ URL('images2/welcome.png') }}">
			</div>

			<div class="col-6">
				<div class="text-info">
					<h5><i class="fas fa-chart-bar"></i>&ensp;Thông tin chi tiết:</h5>
				</div>

				<hr>
				<div class="card-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><b>Tên nhà hàng:</b> {{ $data['Ten_nha_hang'] }} </li>
						<li class="list-group-item"><b>Địa chỉ:</b> {{ $data['Dia_chi'] }}</li>
						<li class="list-group-item"><b>Số điện thoại:</b> {{ $data['SDT'] }}</li>
						<li class="list-group-item"><b>Email:</b> {{ $data['email'] }}</li>
						<li class="list-group-item"><b>Chức vụ của bạn:</b> Admin</li>
						<li class="list-group-item"><b>Tên đăng nhập:</b> {{ $data['Ten_dang_nhap'] }}</li>
						<li class="list-group-item"><b>Mật khẩu:</b> ********</li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</div>

<div class="card shadow">
	<div class="card-header"><h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5></div>
	<div class="card-body">
		<a href="/RestaurantManager/User/trangchu/sua/id={{$data['id']}}" type="button" class="btn btn-info">Chỉnh sửa thông tin</a>
		<div class="float-end"><a href="/RestaurantManager/User/trangchu/xoa/id={{$data['id']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa tài khoản</a></div>
	</div>
</div>

<br>



@endsection