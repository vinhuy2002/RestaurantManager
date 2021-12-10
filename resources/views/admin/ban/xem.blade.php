@extends('admin.index')

@section('admin_content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="" style="margin-top: 10px">
                <strong>XEM CHI TIẾT BÀN</strong>&ensp;
                <i class="fas fa-table"></i>
            </h4>
        </div>

        <div class="card-body">
            {{-- <div class="table-responsive"> --}}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Tên bàn</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Đặt trước</th>
                            <th scope="col">Tên người đặt</th>
                            <th scope="col">Số người</th>
                            <th scope="col">Ngày đặt</th>
                            <th scope="col">Giờ đặt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$data['ten_ban']}}</td>
                            <td>{{$data['trang_thai']}}</td>
                            <td>{{$data['dat_truoc']}}</td>
                            <td>{{$data['datban_ten']}}</td>
                            <td>{{$data['datban_so_nguoi']}}</td>
                            <td>{{$data['datban_ngay']}}</td>
                            <td>{{$data['datban_time']}}</td>
                        </tr>
                    </tbody>
                </table>
            {{-- </div> --}}
        </div>
    </div>

    {{-- <div class="card shadow">
        <div class="card-header">
            <h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5>
        </div>
        <div class="card-body">
            <a href="/User/ban/them" type="button" class="btn btn-info">Thêm bàn</a>
        </div>
    </div> --}}

    <br>

@endsection
