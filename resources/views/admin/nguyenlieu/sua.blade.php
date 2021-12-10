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
            <form action="/User/nguyenlieu/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" id="form2Example1" class="form-control" name="ID_nguyen_lieu" value="{{$data['ID_nguyen_lieu']}}" />

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="ten_nguyen_lieu" value="{{$data['ten_nguyen_lieu']}}" required/>
                    <label class="form-label" for="form2Example1">Tên nguyên liệu</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="date" id="form2Example1" class="form-control" name="ngay_mua" value="{{$data['ngay_mua']}}" required/>
                    <!-- <input type="date" id="form2Example1" class="form-control" name="ngay_mua" data-date-format="DD/MM/YYYY" value="{{$data['ngay_mua']}}"/> -->
                    <!-- <label class="form-label" for="form2Example1">Ngày mua</label> -->
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="so_luong" value="{{$data['so_luong']}}" required/>
                    <label class="form-label" for="form2Example1">Số lượng</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="don_gia" value="{{$data['don_gia']}}" required/>
                    <label class="form-label" for="form2Example1">Đơn giá</label>
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/User/nguyenlieu" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>

@endsection