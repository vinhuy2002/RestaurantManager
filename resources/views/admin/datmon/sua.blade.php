@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA ĐƠN HÀNG</strong>&ensp;
            <i class="fas fa-store"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/User/datmon/sua" method="POST">
                @csrf
                <br>

                <input type="hidden" id="form2Example1" class="form-control" name="ID_dat_mon"
                    value="{{$data['ID_dat_mon']}}" />

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="ten_ban"
                        value="{{$data['ten_ban']}}" list="ten_ban" autocomplete="off" required />
                    <label class="form-label" for="form2Example1">Tên bàn</label>
                    <datalist id="ten_ban">
                        @foreach ($bans as $ban)
                        @if($ban['ID_nha_hang'] == $user['id'])

                        <option value="{{$ban['ten_ban']}}">
                            @endif
                            @endforeach
                    </datalist>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="ten_mon"
                        value="{{$data['ten_mon']}}" list="ten_mon" autocomplete="off" required />
                    <label class="form-label" for="form2Example1">Tên món</label>
                    <datalist id="ten_mon">
                        @foreach ($monans as $monan)
                        @if($monan['ID_nha_hang'] == $user['id'])

                        <option value="{{$monan['ten_mon']}}">
                            @endif
                            @endforeach
                    </datalist>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="so_luong"
                        value="{{$data['so_luong']}}" required />
                    <label class="form-label" for="form2Example1">Số lượng</label>
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/User/datmon" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection