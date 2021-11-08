@extends('admin.index')

@section('admin_content')

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>QUẢN LÝ NHÂN VIÊN</strong>&ensp;
			<i class="fas fa-users"></i>
		</h4>            
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Tên</th>
						<th scope="col">Chức vụ</th>
						<th scope="col">Giới tính</th>
						<th scope="col">Địa chỉ</th>
						<th scope="col">SĐT</th>
						<th scope="col">Tài khoản</th>
						<th scope="col">Thay đổi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Phan Văn Bằng</td>
						<td>Thu ngân</td>
						<td>Nam</td>
						<td>Thừa Thiên Huế</td>
						<td>0987654321</td>
						<td>pvbangRM001</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>Trần Nguyễn Vĩnh Uy</td>
						<td>Đầu bếp</td>
						<td>Nam</td>
						<td>Thừa Thiên Huế</td>
						<td>0987654321</td>
						<td>tnvuyRM002</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Phan Văn Bằng</td>
						<td>Thu ngân</td>
						<td>Nam</td>
						<td>Thừa Thiên Huế</td>
						<td>0987654321</td>
						<td>pvbangRM001</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">4</th>
						<td>Trần Nguyễn Vĩnh Uy</td>
						<td>Đầu bếp</td>
						<td>Nam</td>
						<td>Thừa Thiên Huế</td>
						<td>0987654321</td>
						<td>tnvuyRM002</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">5</th>
						<td>Phan Văn Bằng</td>
						<td>Thu ngân</td>
						<td>Nam</td>
						<td>Thừa Thiên Huế</td>
						<td>0987654321</td>
						<td>pvbangRM001</td>
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
				<button type="button" class="btn btn-info">Thêm nhân viên</button>
			</div>
			<br><br>
			<div class="col-12">
				<button class="btn btn-info dropdown-toggle" type="button" id="MonAn"  data-mdb-toggle="dropdown"  aria-expanded="false">Các chức vụ</button>
				<ul class="dropdown-menu" aria-labelledby="MonAn">
					<li><a class="dropdown-item" href="#">Admin</a></li>
					<li><a class="dropdown-item" href="#">Phục vụ</a></li>
					<li><a class="dropdown-item" href="#">Đầu bếp</a></li>
					<li><a class="dropdown-item" href="#">Thu ngân</a></li>
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


@endsection