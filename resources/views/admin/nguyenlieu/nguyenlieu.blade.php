@extends('admin.index')

@section('admin_content')

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
						<th scope="col">Ngày mua</th>
						<th scope="col">Số lượng</th>
						<th scope="col">Đơn giá</th>
						<th scope="col">Thay đổi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($nguyenlieus as $nguyenlieu)
                    @if($nguyenlieu['ID_nha_hang'] == $data['id'])

					<tr>
                        <th scope="row">{{$nguyenlieu['ID_nguyen_lieu']}}</th>
                        <td>{{$nguyenlieu['ten_nguyen_lieu']}}</td>
                        <td>{{$nguyenlieu['ngay_mua']}}</td>
                        <td>{{$nguyenlieu['so_luong']}}</td>
                        <td>{{number_format($nguyenlieu['don_gia'])}} VND</td>
                        <td>
                            <!-- <a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a> -->
                            <a href="/User/nguyenlieu/sua/id={{$nguyenlieu['ID_nguyen_lieu']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/User/nguyenlieu/xoa/id={{$nguyenlieu['ID_nguyen_lieu']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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
		<a href="/User/nguyenlieu/them" type="button" class="btn btn-info">Thêm nguyên liệu</a>
	</div>
</div>

<br>

@endsection
