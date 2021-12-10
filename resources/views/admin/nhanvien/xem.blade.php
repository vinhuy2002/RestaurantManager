@extends('admin.index')

@section('admin_content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="" style="margin-top: 10px">
                <strong>XEM CHI TIẾT NHÂN VIÊN</strong>&ensp;
                <i class="fas fa-users"></i>
            </h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tên nhân viên</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Bàn quản lý</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $nhanvien['ten_nhan_vien'] }}</td>
                        <td>{{ $nhanvien['chuc_vu'] }}</td>
                        <td>{{ $nhanvien['gioi_tinh'] }}</td>
                        <td>{{ $nhanvien['dia_chi'] }}</td>
                        <td>{{ $nhanvien['sdt'] }}</td>
                        <td>{{ $nhanvien['tai_khoan'] }}</td>
                        <td>{{ $nhanvien['mat_khau'] }}</td>
                        <td>{{ $nhanvien['ban_quan_ly'] }}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <br>
                <div class="text-info">
                    <h5><i class="fas fa-calendar-alt"></i>&ensp;Lịch làm việc:</h5>
                </div>
                <hr>
				
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
							@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 2') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày')){{$nhanvien['gio_lam_viec']}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 2') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>
					
					<tr>	
						<th scope="row">2</th>
						<td>Thứ ba</td>
						<td>14/12/2021</td>
						<td>
							@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 3') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày')){{$nhanvien['gio_lam_viec']}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 3') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">3</th>	
						<td>Thứ tư</td>
						<td>15/12/2021</td>
						<td>
							@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 4') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày')){{$nhanvien['gio_lam_viec']}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 4') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">4</th>	
						<td>Thứ năm</td>
						<td>16/12/2021</td>
						<td>
							@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 5') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày')){{$nhanvien['gio_lam_viec']}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 5') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">5</th>	
						<td>Thứ sáu</td>
						<td>17/12/2021</td>
						<td>
							@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 6') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày'))
							{{$nhanvien['gio_lam_viec']}}@else Nghỉ
							@endif
						</td>
						<td><span class="text-success">@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 6') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">6</th>	
						<td>Thứ bảy</td>
						<td>18/12/2021</td>
						<td>
							@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 7') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày')){{$nhanvien['gio_lam_viec']}}@else Nghỉ@endif
						</td>
						<td><span class="text-success">@if(str_contains($nhanvien['thu_lam_viec'], 'Thứ 7') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>

					</tr>

					<tr>
						<th scope="row">7</th>	
						<td>Chủ nhật</td>
						<td>19/12/2021</td>
						<td>
							@if(str_contains($nhanvien['thu_lam_viec'], 'Chủ nhật') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày')){{$nhanvien['gio_lam_viec']}} @else Nghỉ @endif
						</td>
						<td><span class="text-success">@if(str_contains($nhanvien['thu_lam_viec'], 'Chủ nhật') || str_contains($nhanvien['thu_lam_viec'], 'Mọi ngày'))Chúc bạn có một ngày làm việc tuyệt vời và năng xuất nhé!@endif</span></td>
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


    <br>

@endsection
