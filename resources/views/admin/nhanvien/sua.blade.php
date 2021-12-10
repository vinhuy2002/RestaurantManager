@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA NHÂN VIÊN</strong>&ensp;
            <i class="fas fa-users"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/User/nhanvien/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" class="form-control" name="ID_nhan_vien" value="{{$data['ID_nhan_vien']}}"/>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_nhan_vien" value="{{$data['ten_nhan_vien']}}" required/>
                    <label class="form-label">Tên nhân viên</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="chuc_vu" list="chuc_vu" value="{{$data['chuc_vu']}}" autocomplete="off" required/>
                    <label class="form-label">Chức vụ</label>
                    <datalist id="chuc_vu">
                        @foreach ($chucvus as $chucvu)
                        @if($chucvu['ID_nha_hang'] == $user['id'])
                        <option value="{{$chucvu['ten_chuc_vu']}}">
                            @endif
                            @endforeach
                    </datalist>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="gioi_tinh" value="{{$data['gioi_tinh']}}" required/>
                    <label class="form-label">Giới tính</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="dia_chi" value="{{$data['dia_chi']}}" required/>
                    <label class="form-label">Địa chỉ</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="sdt" value="{{$data['sdt']}}" required/>
                    <label class="form-label">Số điện thoại</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="tai_khoan" value="{{$data['tai_khoan']}}" required/>
                    <label class="form-label">Tên tài khoản</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" class="form-control" name="mat_khau" value="{{$data['mat_khau']}}" required/>
                    <label class="form-label">Mật khẩu</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ban_quan_ly" list="ten_ban" value="{{$data['ban_quan_ly']}}" />
                    <label class="form-label">Bàn quản lý</label>
                    <datalist id="ten_ban">
                        @foreach ($bans as $ban)
                        @if($ban['ID_nha_hang'] == $user['id'])

                        <option value="{{$ban['ten_ban']}}">
                            @endif
                            @endforeach
                    </datalist>
                </div>

                @php
                    $moingay=""; $thu2=""; $thu3=""; $thu4=""; $thu5=""; $thu6=""; $thu7=""; $chunhat="";

                    $thulamviecs = $data['thu_lam_viec'];

                    if(str_contains($thulamviecs, 'Thứ 2'))$thu2="checked";
                    if(str_contains($thulamviecs, 'Thứ 3'))$thu3="checked";
                    if(str_contains($thulamviecs, 'Thứ 4'))$thu4="checked";
                    if(str_contains($thulamviecs, 'Thứ 5'))$thu5="checked";
                    if(str_contains($thulamviecs, 'Thứ 6'))$thu6="checked";
                    if(str_contains($thulamviecs, 'Thứ 7'))$thu7="checked";
                    if(str_contains($thulamviecs, 'Chủ nhật'))$chunhat="checked";
                    if(str_contains($thulamviecs, 'Mọi ngày'))$moingay="checked";
                @endphp

                <div class="card">
                    <div class="card-header">
                        <h5>Lịch làm việc:</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Mọi ngày" id="1" {{$moingay}} name="thu_lam_viec[]" />
                            <label class="form-check-label" for="1">Cả tuần</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 2" id="2" {{$thu2}} name="thu_lam_viec[]" />
                            <label class="form-check-label" for="2">Thứ 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 3" id="3" {{$thu3}} name="thu_lam_viec[]" />
                            <label class="form-check-label" for="3">Thứ 3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 4" id="4" {{$thu4}} name="thu_lam_viec[]" />
                            <label class="form-check-label" for="4">Thứ 4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 5" id="5" {{$thu5}} name="thu_lam_viec[]" />
                            <label class="form-check-label" for="5">Thứ 5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 6" id="6" {{$thu6}} name="thu_lam_viec[]" />
                            <label class="form-check-label" for="6">Thứ 6</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Thứ 7" id="7" {{$thu7}} name="thu_lam_viec[]" />
                            <label class="form-check-label" for="7">Thứ 7</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Chủ nhật" id="8" {{$chunhat}} name="thu_lam_viec[]" />
                            <label class="form-check-label" for="8">Chủ nhật</label>
                        </div>
                        <br>
                        <div class="form-outline mb-4">
                            <input type="input" class="form-control" name="gio_lam_viec" list="gio_lam_viec" value="{{$data['gio_lam_viec']}}"/>
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

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/User/nhanvien" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection