@extends('admin.index')

@section('admin_content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA THÔNG TIN NHÀ HÀNG</strong>&ensp;
            <i class="fas fa-grin-wink"></i>

        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/User/trangchu/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" id="form2Example1" class="form-control" name="id" value="{{$data['id']}}" />

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="Ten_nha_hang" value="{{$data['Ten_nha_hang']}}" required/>
                    <label class="form-label" for="form2Example1">Tên nhà hàng</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="Dia_chi" value="{{$data['Dia_chi']}}" required/>
                    <label class="form-label" for="form2Example1">Địa chỉ</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="SDT" value="{{$data['SDT']}}" required/>
                    <label class="form-label" for="form2Example1">Số điện thoại</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="email" value="{{$data['email']}}" required/>
                    <label class="form-label" for="form2Example1">Email</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" id="form2Example1" class="form-control" name="Ten_dang_nhap" value="{{$data['Ten_dang_nhap']}}" required/>
                    <label class="form-label" for="form2Example1">Tên đăng nhập</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="form2Example1" class="form-control" name="password" value="{{$data['password']}}" required/>
                    <label class="form-label" for="form2Example1">Mật khẩu</label>
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/User/trangchu" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>

@endsection