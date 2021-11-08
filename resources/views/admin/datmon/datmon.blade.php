@extends('admin.index')

@section('admin_content')

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>QUẢN LÝ ĐẶT MÓN</strong>&ensp;
			<i class="fas fa-store"></i>
		</h4>            
	</div>

	<div class="card-body">
		<button class="btn btn-primary dropdown-toggle" type="button" id="chonban"  data-mdb-toggle="dropdown"  aria-expanded="false">Chọn bàn</button>
		<ul class="dropdown-menu" aria-labelledby="chonban">
			<li><a class="dropdown-item" href="#">Bàn 1</a></li>
			<li><a class="dropdown-item" href="#">Bàn 2</a></li>
			<li><a class="dropdown-item" href="#">Bàn 3</a></li>
			<li><a class="dropdown-item" href="#">Bàn vip</a></li>
		</ul>

		<div class="d-flex float-end" style="margin-left: 5px;">
			<button class="btn btn-info px-3 mr-1" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
				<i class="fas fa-minus"></i>
			</button>

			<div class="form-outline">
				<input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
				<label class="form-label" for="form1">Số lượng</label>
			</div>

			<button class="btn btn-info px-3 ml-1" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
				<i class="fas fa-plus"></i>
			</button>
		</div>

		<div class="float-end">
			<a href="" type="button" class="btn btn-success">Thêm món</a>
			
			<button class="btn btn-info dropdown-toggle" type="button" id="LoaiMonAn" data-mdb-toggle="dropdown" aria-expanded="false">Chọn loại</button>
			<ul class="dropdown-menu" aria-labelledby="LoaiMonAn">
				<li><a class="dropdown-item" href="#">Thịt</a></li>
				<li><a class="dropdown-item" href="#">Cá</a></li>
				<li><a class="dropdown-item" href="#">Trái cây</a></li>
				<li><a class="dropdown-item" href="#">Nước</a></li>
			</ul>

			<button class="btn btn-info dropdown-toggle" type="button" id="MonAn"  data-mdb-toggle="dropdown"  aria-expanded="false">Chọn món</button>
			<ul class="dropdown-menu" aria-labelledby="MonAn">
				<li><a class="dropdown-item" href="#">Thịt bò xung khói</a></li>
				<li><a class="dropdown-item" href="#">Gà rán</a></li>
				<li><a class="dropdown-item" href="#">Dưa hấu</a></li>
				<li><a class="dropdown-item" href="#">Cam ép</a></li>
			</ul>

			
		</div>
		
		<hr>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col">STT</th>
						<th scope="col">Tên bàn</th>
						<th scope="col">Tên món</th>
						<th scope="col">Số lượng</th>
						<th scope="col">Đơn giá</th>
						<th scope="col">Tiền</th>
						<th scope="col">Thay đổi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Bàn 1</td>
						<td>Gà rán</td>
						<td>2</td>
						<td>200.000 VND</td>
						<td>400.000 VND</td>
						<td>
							<a href="" type="button" class="btn btn-warning  btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger  btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>Bàn 1</td>
						<td>Bò tái</td>
						<td>3</td>
						<td>100.000 VND</td>
						<td>300.000 VND</td>
						<td>
							<a href="" type="button" class="btn btn-warning  btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger  btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Bàn 1</td>
						<td>Lẩu</td>
						<td>1</td>
						<td>250.000 VND</td>
						<td>250.000 VND</td>
						<td>
							<a href="" type="button" class="btn btn-warning  btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger  btn-rounded">Xóa</a>
						</td>
					</tr>

				</tbody>
			</table>

			<script>
				$(document).ready(function() {
					$('#dataTable').DataTable();
				});
			</script>

			<hr>
			<h5 class="card-title text-success" style="margin-top: 10px">
				<!-- Bàn 1<br> -->
				Số tiền phải trả: 950.000 VND
			</h5>

		</div>
	</div>
</div>

<div class="card shadow">
	<div class="card-header"><h5 class="card-title" style="margin-top: 10px">Tùy chỉnh: (Bàn 1)</h5></div>
	<div class="card-body">
		<a href="" type="button" class="btn btn-primary">Thanh toán</a>

		<a href="?mod=ban&act=add" type="button" class="btn btn-info">Chuyển bàn</a>
	</div>
</div>

<br>

@endsection