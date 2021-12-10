@extends('admin.index')

@section('admin_content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>QUẢN LÝ ĐẶT MÓN</strong>&ensp;
            <i class="fas fa-store"></i>
        </h4>
    </div>

    <div class="card-body">

        <form action="/User/datmon/them" method="POST">
            @csrf
            <div class="row">
                <div class="col-3">
                    <div class="form-outline">
                        <input type="input" class="form-control" name="ten_ban" list="ten_ban" autocomplete="off"
                            required />
                        <label class="form-label">Chọn bàn</label>
                    </div>
                </div>
                <datalist id="ten_ban">
                    @foreach ($bans as $ban)
                    @if($ban['ID_nha_hang'] == $data['id'])

                    <option value="{{$ban['ten_ban']}}">
                        @endif
                        @endforeach
                </datalist>

                <div class="col-3">
                    <div class="form-outline">
                        <input type="input" class="form-control" name="ten_mon" list="ten_mon" autocomplete="off"
                            required />
                        <label class="form-label">Chọn món</label>
                    </div>
                    <datalist id="ten_mon">
                        @foreach ($monans as $monan)
                        @if($monan['ID_nha_hang'] == $data['id'])

                        <option value="{{$monan['ten_mon']}}">
                            @endif
                            @endforeach
                    </datalist>
                </div>

                <div class="col-3">
                    <div class="d-flex">
                        <div class="btn btn-info px-3 mr-1"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </div>

                        <div class="form-outline">
                            <input id="form1" min="1" name="so_luong" value="1" type="number" autocomplete="off"
                                class="form-control" />
                            <label class="form-label" for="form1">Số lượng</label>
                        </div>&nbsp;

                        <div class="btn btn-info px-3 mr-1"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>

                </div>



                <div class="col-3">
                    <div class="float-end">
                        <button type="submit" class="btn btn-success">Thêm món</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên bàn</th>
                        <th scope="col">Tên món</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Tiền</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datmons as $datmon)
                    @if($datmon['ID_nha_hang'] == $data['id'])

                    <tr>
                        <th scope="row">{{$datmon['ID_dat_mon']}}</th>
                        <td>{{$datmon['ten_ban']}}</td>
                        <td>{{$datmon['ten_mon']}}</td>
                        <td>{{$datmon['so_luong']}}</td>
                        <td>{{number_format($datmon['don_gia'])}} VNĐ</td>
                        <td>{{number_format($datmon['tien'])}} VNĐ</td>
                        <td>
                            <a href="/User/datmon/sua/id={{$datmon['ID_dat_mon']}}" type="button"
                                class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/User/datmon/xoa/id={{$datmon['ID_dat_mon']}}"
                                onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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

            <!-- <hr>
            <h5 class="card-title text-success" style="margin-top: 10px">
                Số tiền phải trả: 950.000 VND
            </h5> -->

        </div>
    </div>
</div>

<div class="card shadow">
    <div class="card-header">
        <div class="float-start">
            <h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5>
        </div>
        <div class="float-end">
            <h5 class="card-title text-success" style="margin-top: 10px">
                Tổng số tiền phải trả: {{number_format($tong_tien['tong_tien'])}} VNĐ ({{$tong_tien['ten_ban_thanh_toan']}})
            </h5>

        </div>
    </div>
    <div class="card-body">
        
        <!-- <br> -->
        <form action="/User/datmon/chuyenban" method="POST">
            @csrf
            <div class="float-start">
                <div class="form-outline">
                    <input type="input" class="form-control" name="ban_hien_tai" list="ten_ban" autocomplete="off"
                        required />
                    <label class="form-label">Bàn hiện tại</label>
                </div>
            </div>
            <div class="float-start">
                <div class="form-outline" style="margin-left: 5px;">
                    <input type="input" class="form-control" name="ban_chuyen_den" list="ten_ban" autocomplete="off"
                        required />
                    <label class="form-label">Chọn muốn chuyển đến</label>
                </div>
            </div>
            <div class="float-start">
                <button type="submit" class="btn btn-info" style="margin-left: 5px; padding-bottom: 9px">Chuyển
                    bàn</button>
            </div>
            
        </form>
        <form action="/User/datmon/thanhtoan" method="POST">
            @csrf
            @if($tong_tien['ten_ban_thanh_toan'] != "Chưa chọn bàn")
            <div class="float-end">
                <a href="/User/datmon/xoa_du_lieu_ban/ban={{$tong_tien['ten_ban_thanh_toan']}}"
                    type="submit" class="btn btn-success"
                    onclick="return confirm('Bạn chắc chắn đã nhận được số tiền thanh toán từ khách hàng ở {{$tong_tien['ten_ban_thanh_toan']}} rồi chứ?');"
                    style="margin-left: 5px; padding-bottom: 9px">
                    Đã nhận được tiền {{$tong_tien['ten_ban_thanh_toan']}}
                </a>
            </div>
            @endif
            <div class="float-end">
                <button type="submit" class="btn btn-primary" style="margin-left: 5px; padding-bottom: 9px">Thanh
                    toán</button>
            </div>
            <div class="float-end">
                <div class="form-outline">
                    <input type="input" class="form-control" name="ten_ban" list="ten_ban" autocomplete="off"
                        required />
                    <label class="form-label">Chọn bàn</label>
                </div>
            </div>
            
        </form>
    </div>
</div>

<br>

@endsection