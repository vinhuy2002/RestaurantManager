<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>QUẢN LÝ BÀN</strong>&ensp;
			<i class="fas fa-table"></i>
		</h4>            </div>

		<div class="card-body">
			<div class="table-responsive">
				<a href="?mod=ban&act=add" type="button" class="btn btn-primary">Thêm bàn</a>

				<hr>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Tên bàn</th>
							<th scope="col">Trạng thái</th>
							<th scope="col">Đặt trước</th>
							<th scope="col">Thay đổi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Bàn 1</td>
							<td>Trống</td>
							<td>18h - 22h</td>
							<td>
								<a href="" type="button" class="btn btn-success" target="_blank">Xem</a>
								<a href="" type="button" class="btn btn-warning">Sửa</a>
								<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
							</td>
						</tr>

						<tr>
							<th scope="row">2</th>
							<td>Bàn 2</td>
							<td>Có khách</td>
							<td>17h - 22h</td>
							<td>
								<a href="" type="button" class="btn btn-success" target="_blank">Xem</a>
								<a href="" type="button" class="btn btn-warning">Sửa</a>
								<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
							</td>
						</tr>

						<tr>
							<th scope="row">3</th>
							<td>Bàn vip</td>
							<td>Trống</td>
							<td>19h - 22h</td>
							<td>
								<a href="" type="button" class="btn btn-success" target="_blank">Xem</a>
								<a href="" type="button" class="btn btn-warning">Sửa</a>
								<a href="" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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

	<br>