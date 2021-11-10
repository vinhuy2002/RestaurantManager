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

        <form action="/RestaurantManager/User/datmon/them" method="POST">
            @csrf
            <div class="row">
                <div class="col-3">
                    <div class="form-outline">
                        <input type="input" class="form-control" name="ten_ban" list="ten_ban" autocomplete="off" required />
                        <label class="form-label">Chọn bàn</label>
                    </div>
                </div>
                <datalist id="ten_ban">
                    @foreach ($bans as $ban)
                    <option value="{{$ban['ten_ban']}}">
                        @endforeach
                </datalist>

                <div class="col-3">
                    <div class="form-outline">
                        <input type="input" class="form-control" name="ten_mon" list="ten_mon" autocomplete="off" required />
                        <label class="form-label">Chọn món</label>
                    </div>
                    <datalist id="ten_mon">
                        @foreach ($monans as $monan)
                        <option value="{{$monan['ten_mon']}}">
                            @endforeach
                    </datalist>
                </div>

                <div class="col-3">
                    <div class="d-flex">
                        <div class="btn btn-info px-3 mr-1" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </div>

                        <div class="form-outline">
                            <input id="form1" min="1" name="so_luong" value="1" type="number" autocomplete="off" class="form-control" />
                            <label class="form-label" for="form1">Số lượng</label>
                        </div>&nbsp;

                        <div class="btn btn-info px-3 mr-1" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
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
                        <th scope="col">STT</th>
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
                    <tr>
                        <th scope="row">{{$datmon['ID_dat_mon']}}</th>
                        <td>{{$datmon['ten_ban']}}</td>
                        <td>{{$datmon['ten_mon']}}</td>
                        <td>{{$datmon['so_luong']}}</td>
                        <td>{{$datmon['don_gia']}} VND</td>
                        <td>{{$datmon['tien']}} VND</td>
                        <td>
							<a href="/RestaurantManager/User/datmon/sua/id={{$datmon['ID_dat_mon']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/RestaurantManager/User/datmon/xoa/id={{$datmon['ID_dat_mon']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                class="btn btn-danger btn-rounded">Xóa</a>
                        </td>
                    </tr>

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
        <h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5>
    </div>
    <div class="card-body">
        <a href="" type="button" class="btn btn-primary">Thanh toán</a>

        <a href="?mod=ban&act=add" type="button" class="btn btn-info">Chuyển bàn</a>
    </div>
</div>

<br>

@endsection