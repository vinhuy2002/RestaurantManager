<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>QUẢN LÝ NGUYÊN LIỆU</strong>&ensp;
			<i class="fas fa-cannabis"></i>
		</h4>            
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Tên nguyên liệu</th>
						<th scope="col">Số lượng</th>
						<th scope="col">Thay đổi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Rau</td>
						<td>200</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>Bơ</td>
						<td>100</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Sữa</td>
						<td>50</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">4</th>
						<td>Cá</td>
						<td>100</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">5</th>
						<td>Thịt</td>
						<td>50</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>

					<tr>
						<th scope="row">6</th>
						<td>Phô mai</td>
						<td>75</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>
					
					<tr>
						<th scope="row">7</th>
						<td>Ớt</td>
						<td>250</td>
						<td>
							<a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a>
							<a href="" type="button" class="btn btn-warning btn-rounded">Sửa</a>
							<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger btn-rounded">Xóa</a>
						</td>
					</tr>
					<tr>
						<th scope="row">8</th>
						<td>Gia vị</td>
						<td>150</td>
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
		<a href="?mod=ban&act=add" type="button" class="btn btn-info">Thêm nguyên liệu</a>
	</div>
</div>

<br>