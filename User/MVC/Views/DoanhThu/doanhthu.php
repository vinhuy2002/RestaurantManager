<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>QUẢN LÝ DOANH THU</strong>&ensp;
			<i class="fas fa-chart-line"></i>
		</h4>            
	</div>

	<div class="card-body">
		<form action="" class="text-center">
			<h6>
				Chọn mốc thời gian từ:&ensp;
				<input type="date" id="batdau" name="batdau">
				&ensp;cho đến:&ensp;
				<input type="date" id="ketthuc" name="ketthuc">&emsp;
				<button type="button" class="btn btn-info btn-rounded">Thống kê</button>
			</h6>
		</form>
		<br>
		<table class="table table-hover text-nowrap table-bordered">
			<thead>
				<tr>
					<th scope="col">Tên nhà hàng</th>
					<th scope="col">Thời gian</th>
					<th scope="col">Số đơn hàng</th>
					<th scope="col">Tổng doanh thu</th>
					<th scope="col">Tổng lợi nhuận</th>
					<th scope="col">Lợi nhuận(%)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td scope="row">Nhà hàng Xịn Liền</td>
					<td>10/10/2021 - 30/10/2021</td>
					<td>239</td>
					<td>150.000.000 VNĐ</td>
					<td>122.000.000 VNĐ</td>
					<td>92.33 %</td>

				</tr>
			</tbody>
		</table>

		<br>
		<div class="text-info">
			<h5><i class="fas fa-chart-bar"></i>&ensp;Doanh thu chi tiết:</h5>
		</div>

		<hr>
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col">Tên bàn</th>
						<th scope="col">Thời gian</th>
						<th scope="col">Ngày</th>
						<th scope="col">Số lượng đặt</th>
						<th scope="col">Doanh thu</th>
						<th scope="col">Lợi nhuận</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td scope="row">Bàn 1</td>
						<td>10h - 16h</td>
						<td>10/10/2021</td>
						<td>16</td>
						<td>2.250.000 VNĐ</td>
						<td>1.700.000 VNĐ</td>
					</tr>
					<tr>
						<td scope="row">Bàn vip</td>
						<td>13h - 18h</td>
						<td>10/10/2021</td>
						<td>32</td>
						<td>4.550.000 VNĐ</td>
						<td>4.100.000 VNĐ</td>
					</tr>
					<tr>
						<td scope="row">Bàn 5</td>
						<td>10h - 16h</td>
						<td>10/10/2021</td>
						<td>10</td>
						<td>1.250.000 VNĐ</td>
						<td>900.000 VNĐ</td>
					</tr>
					<tr>
						<td scope="row">Bàn 1</td>
						<td>10h - 16h</td>
						<td>10/10/2021</td>
						<td>5</td>
						<td>620.000 VNĐ</td>
						<td>400.000 VNĐ</td>
					</tr>
					<tr>
						<td scope="row">Bàn 2</td>
						<td>10h - 16h</td>
						<td>10/10/2021</td>
						<td>15</td>
						<td>2.250.000 VNĐ</td>
						<td>1.700.000 VNĐ</td>
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
		<button type="button" class="btn btn-success">Xuất excel</button>
		<button type="button" class="btn btn-info">In báo cáo</button>
	</div>
</div>

<br>