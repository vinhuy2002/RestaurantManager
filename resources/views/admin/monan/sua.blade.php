@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA MÓN ĂN</strong>&ensp;
            <i class="fas fa-utensils"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/User/monan/sua" method="POST">
                @csrf
                <br>

                <input type="hidden" id="form2Example1" class="form-control" name="ID_mon" value="{{$data['ID_mon']}}"/>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="loai" value="{{$data['loai']}}" required/>
                    <label class="form-label" for="form2Example1">Loại món ăn</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="ten_mon" value="{{$data['ten_mon']}}" required/>
                    <label class="form-label" for="form2Example1">Tên món</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="don_gia" value="{{$data['don_gia']}}" required/>
                    <label class="form-label" for="form2Example1">Đơn giá</label>
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/User/monan" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection