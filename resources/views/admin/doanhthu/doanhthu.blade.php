@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>QUẢN LÝ DOANH THU</strong>&ensp;
			<i class="fas fa-chart-line"></i>
		</h4>            
	</div>

	<div class="card-body">
		<form action="/User/doanhthu/thongke" method="POST" class="text-center">
			@csrf
			<h6>
				Chọn mốc thời gian từ:&ensp;
				<input type="date" id="bat_dau" name="bat_dau" >
				
				&ensp;cho đến:&ensp;
				<input type="date" id="ket_thuc" name="ket_thuc">&emsp;
				<button type="submit" class="btn btn-info btn-rounded">Thống kê</button>
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
					<td scope="row">{{ $data['Ten_nha_hang'] }}</td>
					<td>{{$bat_dau}}@if($ket_thuc) đến @endif{{$ket_thuc}}</td>
					<td>{{$tong_doanh_thu['so_don_hang']}}</td>
					<td>{{number_format($tong_doanh_thu['tong_doanh_thu'])}} VNĐ</td>
					<td>{{number_format($tong_doanh_thu['tong_loi_nhuan'])}} VNĐ</td>
					<td>{{$tong_doanh_thu['loi_nhuan']}} %</td>

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
						<th scope="col">Tên món</th>
						<th scope="col">Thời gian</th>
						<th scope="col">Số lượng</th>
						<th scope="col">Doanh thu</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($doanhthus as $doanhthu)
                    @if($doanhthu->ID_nha_hang == $data['id'])
					<tr>
						<td scope="row">{{$doanhthu->ten_ban}}</td>
						<td>{{$doanhthu->ten_mon}}</td>
						<td>{{$doanhthu->created_at}}</td>
						<td>{{$doanhthu->so_luong}}</td>
						<td>{{number_format($doanhthu->tien)}} VNĐ</td>
					</tr>
					@endif
                    @endforeach

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
		<form action="/User/doanhthu/xuat" method="POST">
		@csrf
			<button type="submit" class="btn btn-success">Xuất excel</button>
		</form>
	</div>
</div>

<br>
@endsection