@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM CHỨC VỤ</strong>&ensp;
            <i class="fas fa-list"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/User/chucvu/them" method="POST">
                @csrf
                <br>
                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_chuc_vu" list="ten_chuc_vu" autocomplete="off"
                        required />
                    <label class="form-label">Tên chức vụ</label>
                    <datalist id="ten_chuc_vu">
                        <option value="Admin">
                        <option value="Phục vụ">
                        <option value="Đầu bếp">
                        <option value="Thu ngân">
                    </datalist>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="mo_ta" list="mo_ta" autocomplete="off" required />
                    <label class="form-label">Mô tả</label>
                    <datalist id="mo_ta">
                        <option value="Quản lý tất cả mọi thứ ở nhà hàng">
                        <option value="Phục vụ khách hàng, chạy bàn">
                        <option value="Nấu nướng, quản lý thức ăn">
                        <option value="Quản lý tài chính, doanh thu">
                    </datalist>
                </div>
    
                <div class="card">
                    <div class="card-header"><h5>Quyền truy cập:</h5></div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Món ăn" id="1" name="quyen[]" />
                            <label class="form-check-label" for="1">Quản lý Món ăn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Bàn" id="2" name="quyen[]" />
                            <label class="form-check-label" for="2">Quản lý Bàn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Đặt món" id="3" name="quyen[]" />
                            <label class="form-check-label" for="3">Quản lý Đặt món</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Nguyên liệu" id="4" name="quyen[]" />
                            <label class="form-check-label" for="4">Quản lý Nguyên liệu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Lịch làm việc" id="5" name="quyen[]" checked/>
                            <label class="form-check-label" for="5">Lịch làm việc </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Chức vụ" id="6" name="quyen[]" />
                            <label class="form-check-label" for="6">Quản lý Chức vụ</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Nhân viên" id="7" name="quyen[]" />
                            <label class="form-check-label" for="7">Quản lý Nhân viên</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Doanh thu" id="8" name="quyen[]" />
                            <label class="form-check-label" for="8">Quản lý Doanh Thu</label>
                        </div>
                       
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/User/chucvu" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection