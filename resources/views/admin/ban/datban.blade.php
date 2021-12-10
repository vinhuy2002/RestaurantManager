@extends('admin.index')

@section('admin_content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="" style="margin-top: 10px">
                <strong>ĐẶT BÀN</strong>&ensp;
                <i class="fas fa-table"></i>

            </h4>
        </div>

        <div class="card-body">
            <form action="/User/ban/datban" method="POST">
                @csrf
                {{-- <input type="hidden" id="form2Example1" class="form-control" name="ID_ban" value="{{$data['ID_ban']}}"/> --}}

                <div class="form-outline">
                    <input type="input" class="form-control" name="ten_ban" list="ten_ban" autocomplete="off" required />
                    <label class="form-label">Chọn bàn</label>
                    <datalist id="ten_ban">
                        @foreach ($bans as $ban)
                            @if ($ban['ID_nha_hang'] == $data['id'])
                                <option value="{{ $ban['ten_ban'] }}">
                            @endif
                        @endforeach
                    </datalist>
                </div>
                <br>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="datban_ten" required />
                    <label class="form-label" for="form2Example1">Tên người đặt</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="so_nguoi" value="1" />
                    <label class="form-label">Số người</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="date" class="form-control" name="ngay" />
                </div>
                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="time" list="khung_gio" autocomplete="off" required />
                    <label class="form-label">Khung giờ</label>
                    <datalist id="khung_gio">
                        <option value="7h-12h">
                        <option value="7h-17h">
                        <option value="7h-22h">
                        <option value="12h-17h">
                        <option value="12h-22h">
                        <option value="17h-22h">
                    </datalist>
                </div>

                <input type="hidden" class="form-control" name="ID_nha_hang" value="{{$data['id']}}" />

                <button type="submit" class="btn btn-secondary">Đăt bàn</button>
                <a href="/User/ban" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>


@endsection
