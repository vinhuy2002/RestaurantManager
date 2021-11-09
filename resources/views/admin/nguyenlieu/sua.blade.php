@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA NGUYÊN LIỆU</strong>&ensp;
            <i class="fas fa-cannabis"></i>

        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/RestaurantManager/User/nguyenlieu/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" id="form2Example1" class="form-control" name="ID_nguyen_lieu" value="{{$data['ID_nguyen_lieu']}}" />

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="ten_nguyen_lieu" value="{{$data['ten_nguyen_lieu']}}"/>
                    <label class="form-label" for="form2Example1">Tên nguyên liệu</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="so_luong" value="{{$data['so_luong']}}"/>
                    <label class="form-label" for="form2Example1">Số lượng</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="don_gia" value="{{$data['don_gia']}}"/>
                    <label class="form-label" for="form2Example1">Đơn giá</label>
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/RestaurantManager/User/nguyenlieu" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection