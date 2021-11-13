@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM NHÂN VIÊN</strong>&ensp;
            <i class="fas fa-users"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/RestaurantManager/User/nhanvien/them" method="POST">
                @csrf
                <br>
                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_nhan_vien" required/>
                    <label class="form-label">Tên nhân viên</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="chuc_vu" list="chuc_vu" required/>
                    <label class="form-label">Chức vụ</label>
                    <datalist id="chuc_vu">
                        @foreach ($chucvus as $chucvu)
                        @if($chucvu['ID_nha_hang'] == $data['id'])
                            <option value="{{$chucvu['ten_chuc_vu']}}">
                        @endif
                        @endforeach
                    </datalist>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="gioi_tinh" required/>
                    <label class="form-label">Giới tính</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="dia_chi" required/>
                    <label class="form-label">Địa chỉ</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="sdt" required/>
                    <label class="form-label">Số điện thoại</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="tai_khoan" required/>
                    <label class="form-label">Tên tài khoản</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" class="form-control" name="mat_khau" required/>
                    <label class="form-label">Mật khẩu</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ban_quan_ly" value="Không" required/>
                    <label class="form-label">Bàn quản lý</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="lich_lam_viec" value="Chưa có" required/>
                    <label class="form-label">Lịch làm việc</label>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/RestaurantManager/User/nhanvien" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection