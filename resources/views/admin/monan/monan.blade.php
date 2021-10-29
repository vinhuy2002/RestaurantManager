<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>QUẢN LÝ MÓN ĂN</strong>&ensp;
			<i class="fas fa-utensils"></i>
		</h4>            
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<!-- <a href="?mod=ban&act=add" type="button" class="btn btn-primary">Thêm bàn</a> -->

			<!-- <hr> -->
			<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
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
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>Thịt</td>
						<td>Gà rán</td>
						<td>200.000 VND</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Nước</td>
						<td>Cam ép</td>
						<td>15.000 VND</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

				</tbody>
			</table>

			<script>
				$(document).ready(function() {
					$('#dataTable').DataTable();
				});
			</script>
		</div>
	</div>
</div>


<div class="card shadow">
	<div class="card-header"><h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5></div>
	<div class="card-body">
		<div class="row">
			<div class="col-12">
				<button class="btn btn-info dropdown-toggle" type="button" id="LoaiMonAn" data-mdb-toggle="dropdown" aria-expanded="false">Loại món ăn</button>
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
				<button class="btn btn-info dropdown-toggle" type="button" id="MonAn"  data-mdb-toggle="dropdown"  aria-expanded="false">Các món ăn</button>
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