<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>XEM LỊCH LÀM VIỆC</strong>&ensp;
			<i class="fas fa-calendar-alt"></i>
		</h4>            
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>	
						<th scope="col">STT</th>
						<th scope="col">Thứ</th>
						<th scope="col">Ngày</th>
						<th scope="col">Giờ làm việc</th>
						<th scope="col">Ghi chú</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<th scope="row">1</th>
						<td>Thứ hai</td>
						<td>10/10/2021</td>
						<td>8h - 16h</td>
						<td><span class="text-success">Nhớ đặt mua thức ăn trước buổi trưa</span></td>

					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Thứ ba</td>
						<td>11/10/2021</td>
						<td>8h - 16h</td>
						<td><span class="text-success"></span></td>

					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Thứ tư</td>
						<td>12/10/2021</td>
						<td>15h - 22h</td>
						<td><span class="text-success"></span></td>

					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Thứ năm</td>
						<td>13/10/2021</td>
						<td>15h - 22h</td>
						<td><span class="text-success"></span></td>

					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Thứ sáu</td>
						<td>14/10/2021</td>
						<td></td>
						<td><span class="text-success">Hôm nay nhà hàng tạm đóng cửa do không thích bán</span></td>

					</tr>
					<tr>
						<th scope="row">7</th>
						<td>Thứ bảy</td>
						<td>15/10/2021</td>
						<td>8h - 22h</td>
						<td><span class="text-success"></span></td>

					</tr>
					<tr>
						<th scope="row">8</th>
						<td>Chủ nhật</td>
						<td>16/10/2021</td>
						<td></td>
						<td><span class="text-success"></span></td>

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
		<a href="" type="button" class="btn btn-info btn-rounded">Báo cáo</a>
		<a href="?mod=ban&act=add" type="button" class="btn btn-warning btn-rounded">Xin nghỉ</a>
	</div>
</div>

<br>