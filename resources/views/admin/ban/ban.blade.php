@extends('admin.index')

@section('admin_content')

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="" style="margin-top: 10px">
			<strong>QUẢN LÝ BÀN</strong>&ensp;
			<i class="fas fa-table"></i>
		</h4>            
	</div>

	<div class="card-body">
		<div class="table-responsive">
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
					@foreach ($bans as $ban)
                    @if($ban['ID_nha_hang'] == $data['id'])

					<tr>
                        <th scope="row">{{$ban['ID_ban']}}</th>
                        <td>{{$ban['ten_ban']}}</td>

						@foreach ($datmons as $datmon)	
							@if(($datmon['ten_ban'] == $ban['ten_ban']))
							@if($datmon['ID_nha_hang'] == $data['id'])
                        		@if($ban['trang_thai'] = 'Có người')
								@endif
								@break
							@endif
							@endif
						@endforeach
						<td>{{$ban['trang_thai']}}</td>
						
                        <td>{{$ban['dat_truoc']}}</td>
                        <td>
                            <!-- <a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a> -->
                            <a href="/User/ban/xem/id={{$ban['ID_ban']}}" type="button" class="btn btn-success btn-rounded">Xem</a>
                            <a href="/User/ban/sua/id={{$ban['ID_ban']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/User/ban/xoa/id={{$ban['ID_ban']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                class="btn btn-danger btn-rounded">Xóa</a>
                        </td>
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
		<a href="/User/ban/them" type="button" class="btn btn-info">Thêm bàn</a>
		<a href="/User/ban/datban" type="button" class="btn btn-secondary">Đặt bàn</a> 
	</div>
</div>

<br>

@endsection