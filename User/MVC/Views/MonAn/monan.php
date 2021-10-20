<h3>
	<p class="note" style="margin-top: 15px">
		<strong>QUẢN LÝ MÓN ĂN</strong>&ensp;
		<i class="fas fa-utensils"></i>
	</p>
</h3>

<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Loại</th>
			<th scope="col">Tên món</th>
			<th scope="col">Đơn giá</th>
			<th scope="col">Thay đổi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">1</th>
			<td>Thịt</td>
			<td>Bò xung khói</td>
			<td>150.000 VND</td>
			<td>
				<a href="" class="text-warning ">Sửa</a>&emsp;
				<a href="" class="text-danger">Xóa</a>
			</td>
		</tr>

		<tr>
			<th scope="row">2</th>
			<td>Thịt</td>
			<td>Gà rán</td>
			<td>200.000 VND</td>
			<td>
				<a href="" class="text-warning ">Sửa</a>&emsp;
				<a href="" class="text-danger">Xóa</a>
			</td>
		</tr>

		<tr>
			<th scope="row">3</th>
			<td>Nước</td>
			<td>Cam ép</td>
			<td>15.000 VND</td>
			<td>
				<a href="" class="text-warning ">Sửa</a>&emsp;
				<a href="" class="text-danger">Xóa</a>
			</td>
		</tr>

		<tr>
			<th scope="row">4</th>
			<td>Thịt</td>
			<td>Gà rán</td>
			<td>200.000 VND</td>
			<td>
				<a href="" class="text-warning ">Sửa</a>&emsp;
				<a href="" class="text-danger">Xóa</a>
			</td>
		</tr>

		<tr>
			<th scope="row">5</th>
			<td>Nước</td>
			<td>Cam ép</td>
			<td>15.000 VND</td>
			<td>
				<a href="" class="text-warning ">Sửa</a>&emsp;
				<a href="" class="text-danger">Xóa</a>
			</td>
		</tr>

	</tbody>
</table>

<div class="float-end">
	<div class="input-group float-end">
		<div class="form-outline float-end">
			<input type="search" id="form1" class="form-control" />
			<label class="form-label" for="form1">Tìm kiếm</label>
		</div>
		<button type="button" class="btn btn-info">
			<i class="fas fa-search"></i>
		</button>
	</div>
</div>
<br><br>

<div class="card">
	<div class="card-body">
		<h5 class="card-title">Tùy chỉnh:</h5>
		<br>
		<div class="row">
			<div class="col-12">
				<button class="btn btn-info dropdown-toggle btn-rounded" type="button" id="LoaiMonAn" data-mdb-toggle="dropdown" aria-expanded="false">Loại món ăn</button>
				<ul class="dropdown-menu" aria-labelledby="LoaiMonAn">
					<li><a class="dropdown-item" href="#">Thịt</a></li>
					<li><a class="dropdown-item" href="#">Cá</a></li>
					<li><a class="dropdown-item" href="#">Trái cây</a></li>
					<li><a class="dropdown-item" href="#">Nước</a></li>
				</ul>
				&emsp;&emsp;&emsp;&emsp;&emsp;
				<button type="button" class="btn btn-primary btn-rounded">Thêm</button>
				<button type="button" class="btn btn-warning btn-rounded">Sửa</button>
				<button type="button" class="btn btn-danger btn-rounded">Xóa</button>
			</div>
			<br><br>
			<div class="col-12">
				<button class="btn btn-info dropdown-toggle btn-rounded" type="button" id="MonAn"  data-mdb-toggle="dropdown"  aria-expanded="false">Các món ăn</button>
				<ul class="dropdown-menu" aria-labelledby="MonAn">
					<li><a class="dropdown-item" href="#">Thịt bò xung khói</a></li>
					<li><a class="dropdown-item" href="#">Gà rán</a></li>
					<li><a class="dropdown-item" href="#">Dưa hấu</a></li>
					<li><a class="dropdown-item" href="#">Cam ép</a></li>
				</ul>
				&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
				<button type="button" class="btn btn-primary btn-rounded">Thêm</button>
				<button type="button" class="btn btn-warning btn-rounded">Sửa</button>
				<button type="button" class="btn btn-danger btn-rounded">Xóa</button>
			</div>
			
		</div>
	</div>
</div>

<br>
<br>
<br>