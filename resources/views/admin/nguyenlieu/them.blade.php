@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM NGUYÊN LIỆU</strong>&ensp;
            <i class="fas fa-cannabis"></i>

        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/RestaurantManager/User/nguyenlieu/them" method="POST">
                @csrf
                <br>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="ten_nguyen_lieu" />
                    <label class="form-label" for="form2Example1">Tên nguyên liệu</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="so_luong" />
                    <label class="form-label" for="form2Example1">Số lượng</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="don_gia" />
                    <label class="form-label" for="form2Example1">Đơn giá</label>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/RestaurantManager/User/nguyenlieu" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection