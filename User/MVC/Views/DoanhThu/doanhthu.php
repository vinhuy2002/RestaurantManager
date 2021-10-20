<h3>
	<p class="note" style="margin-top: 15px">
		<strong>QUẢN LÝ DOANH THU</strong>&ensp;
		<i class="fas fa-chart-line"></i>
	</p>
</h3>

<div class="alert bg-light text-center " role="alert">
	<form action="">
		<label>Chọn mốc thời gian từ:&ensp;</label>
		<input type="date" id="batdau" name="batdau">
		<label>&ensp;cho đến: </label>
		<input type="date" id="ketthuc" name="ketthuc">&emsp;
		<button type="button" class="btn btn-info">Thống kê</button>
	</form>
</div>

<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th scope="col">Tên nhà hàng</th>
			<th scope="col">Thời gian</th>
			<th scope="col">Số đơn hàng</th>
			<th scope="col">Doanh thu</th>
			<th scope="col">Lợi nhuận</th>
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

<div class="alert alert-info" role="alert">
	<b><i class="fas fa-chart-bar"></i>&ensp;Doanh thu chi tiết:</b>
</div>

<table class="table table-hover text-nowrap">
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
		<button type="button" class="btn btn-success btn-rounded">Xuất excel</button>
		<button type="button" class="btn btn-info btn-rounded">In báo cáo</button>
		
	</div>
</div>

<br>
<br>
<br>