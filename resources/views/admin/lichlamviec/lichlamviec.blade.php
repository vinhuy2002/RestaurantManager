@extends('admin.index')

@section('admin_content')

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
				@if(!Session::get('NhanVien'))
				<span class="text-success">Bạn là Quản lý, không có lịch trình dành cho bạn! Nhưng bạn có thể thêm và thay đổi lịch làm việc của nhân viên ở Menu <a href="/User/nhanvien" class="text-success">Quản lý Nhân viên</a>.</span>
				<!-- <thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Thứ</th>
						<th scope="col">Ngày</th>
						<th scope="col">Giờ làm việc</th>
						<th scope="col">Ghi chú</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<th scope="row"></th>
						<td></td>
						<td></td>
						<td></td>
						<td><span class="text-success"></span></td>

					</tr>
				</tbody> -->
				@else
				<thead>
					<tr>
						<th scope="col">ID</th>
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
						<td>13/12/2021</td>
						<td>
							@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 2') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày')){{session()->get(key:'NhanVien')->gio_lam_viec}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 2') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>
					
					<tr>	
						<th scope="row">2</th>
						<td>Thứ ba</td>
						<td>14/12/2021</td>
						<td>
							@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 3') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày')){{session()->get(key:'NhanVien')->gio_lam_viec}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 3') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">3</th>	
						<td>Thứ tư</td>
						<td>15/12/2021</td>
						<td>
							@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 4') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày')){{session()->get(key:'NhanVien')->gio_lam_viec}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 4') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">4</th>	
						<td>Thứ năm</td>
						<td>16/12/2021</td>
						<td>
							@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 5') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày')){{session()->get(key:'NhanVien')->gio_lam_viec}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 5') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">5</th>	
						<td>Thứ sáu</td>
						<td>17/12/2021</td>
						<td>
							@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 6') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày'))
							{{session()->get(key:'NhanVien')->gio_lam_viec}}@else Nghỉ
							@endif
						</td>
						<td><span class="text-success">@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 6') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">6</th>	
						<td>Thứ bảy</td>
						<td>18/12/2021</td>
						<td>
							@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 7') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày')){{session()->get(key:'NhanVien')->gio_lam_viec}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Thứ 7') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">7</th>	
						<td>Chủ nhật</td>
						<td>19/12/2021</td>
						<td>
							@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Chủ nhật') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày')){{session()->get(key:'NhanVien')->gio_lam_viec}} @else Nghỉ @endif
						</td>
						<td><span class="text-success">@if(str_contains(Session::get('NhanVien')->thu_lam_viec, 'Chủ nhật') || str_contains(Session::get('NhanVien')->thu_lam_viec, 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>
					</tr>
				</tbody>
				@endif
			</table>

			<script>
				$(document).ready(function() {
					$('#dataTable').DataTable();
				});
			</script>
		</div>
	</div>
</div>
@if(Session::get('NhanVien'))
<div class="card shadow">
	<div class="card-header"><h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5></div>
	<div class="card-body">
		<a href="" type="button" class="btn btn-info">Báo cáo</a>
		<a href="?mod=ban&act=add" type="button" class="btn btn-warning">Xin nghỉ</a>
	</div>
</div>
@else
<div class="card shadow">
	{{-- <div class="card-header"><h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5></div> --}}
	<div class="card-body">
		<a href="/User/nhanvien" type="button" class="btn btn-info">Xem lịch làm việc của từng nhân viên</a>
	</div>
</div>
@endif
<br>

@endsection