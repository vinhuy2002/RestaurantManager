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
            <form action="/User/nhanvien/them" method="POST">
                @csrf
                <br>
                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_nhan_vien" value="{{ old('ten_nhan_vien') }}" required />
                    <label class="form-label">Tên nhân viên</label>
                </div>
                <p class="text-danger">@error('ten_nhan_vien')
                    {{ $message }}
                @enderror</p>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="chuc_vu" list="chuc_vu" autocomplete="off" value="{{ old('chuc_vu') }}"
                        required />
                    <label class="form-label">Chức vụ</label>
                    <datalist id="chuc_vu">
                        @foreach ($chucvus as $chucvu)
                        @if($chucvu['ID_nha_hang'] == $data['id'])
                        <option value="{{$chucvu['ten_chuc_vu']}}">
                            @endif
                            @endforeach
                    </datalist>
                </div>
                <p class="text-danger">@error('chuc_vu')
                    {{ $message }}
                @enderror</p>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="gioi_tinh" value="{{ old('gioi_tinh') }}" required />
                    <label class="form-label">Giới tính</label>
                </div>
                <p class="text-danger">@error('gioi_tinh')
                    {{ $message }}
                @enderror</p>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="dia_chi" value="{{ old('dia_chi') }}"required />
                    <label class="form-label">Địa chỉ</label>
                </div>
                <p class="text-danger">@error('dia_chi')
                    {{ $message }}
                @enderror</p>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="sdt"  required maxlength="10" />
                    <label class="form-label">Số điện thoại</label>
                </div>
                <p class="text-danger">@error('sdt')
                    {{ $message }}
                @enderror</p>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="tai_khoan" value="{{ old('ten_nhan_vien') }}" required />
                    <label class="form-label">Tên tài khoản</label>
                </div>
                <p class="text-danger">@error('tai_khoan')
                    {{ $message }}
                @enderror</p>

                <div class="form-outline mb-4">
                    <input type="password" class="form-control" name="mat_khau" required />
                    <label class="form-label">Mật khẩu</label>
                </div>
                <p class="text-danger">@error('mat_khau')
                    {{ $message }}
                @enderror</p>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ban_quan_ly" list="ten_ban" value="" />
                    <label class="form-label">Bàn quản lý</label>
                    <datalist id="ten_ban">
                        @foreach ($bans as $ban)
                        @if($ban['ID_nha_hang'] == $data['id'])

                        <option value="{{$ban['ten_ban']}}">
                            @endif
                            @endforeach
                    </datalist>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Lịch làm việc:</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Mọi ngày" id="1" name="thu_lam_viec[]"
                                checked />
                            <label class="form-check-label" for="1">Cả tuần</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 2" id="2" name="thu_lam_viec[]" />
                            <label class="form-check-label" for="2">Thứ 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 3" id="3" name="thu_lam_viec[]" />
                            <label class="form-check-label" for="3">Thứ 3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 4" id="4" name="thu_lam_viec[]" />
                            <label class="form-check-label" for="4">Thứ 4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 5" id="5" name="thu_lam_viec[]" />
                            <label class="form-check-label" for="5">Thứ 5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 6" id="6" name="thu_lam_viec[]" />
                            <label class="form-check-label" for="6">Thứ 6</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 7" id="7" name="thu_lam_viec[]" />
                            <label class="form-check-label" for="7">Thứ 7</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Chủ nhật" id="8" name="thu_lam_viec[]" />
                            <label class="form-check-label" for="8">Chủ nhật</label>
                        </div>
                        <br>
                        <div class="form-outline mb-4">
                            <input type="input" class="form-control" name="gio_lam_viec" list="gio_lam_viec" />
                            <label class="form-label">Giờ làm việc</label>
                            <datalist id="gio_lam_viec">
                                <option value="7h - 12h">
                                <option value="7h - 17h">
                                <option value="7h - 22h">
                                <option value="12h - 17h">
                                <option value="12h - 22h">
                                <option value="17h - 22h">
                            </datalist>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/User/nhanvien" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection