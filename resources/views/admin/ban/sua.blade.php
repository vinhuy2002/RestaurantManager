@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA BÀN</strong>&ensp;
            <i class="fas fa-table"></i>

        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/User/ban/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" id="form2Example1" class="form-control" name="ID_ban" value="{{$data['ID_ban']}}"/>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="ten_ban" value="{{$data['ten_ban']}}" required/>
                    <label class="form-label" for="form2Example1">Tên bàn</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="trang_thai" value="{{$data['trang_thai']}}" required/>
                    <label class="form-label" for="form2Example1">Trạng thái</label>
                </div>

                {{-- <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="dat_truoc" value="{{$data['dat_truoc']}}" required/>
                    <label class="form-label" for="form2Example1">Đặt trước</label>
                </div> --}}

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/User/ban" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection