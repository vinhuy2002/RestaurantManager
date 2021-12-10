@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA CHỨC VỤ</strong>&ensp;
            <i class="fas fa-list"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/User/chucvu/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" class="form-control" name="ID_chuc_vu" value="{{$data['ID_chuc_vu']}}" />

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_chuc_vu" list="ten_chuc_vu" value="{{$data['ten_chuc_vu']}}" autocomplete="off"
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
                    <input type="input" class="form-control" name="mo_ta" list="mo_ta" value="{{$data['mo_ta']}}" autocomplete="off" required />
                    <label class="form-label">Mô tả</label>
                    <datalist id="mo_ta">
                        <option value="Quản lý tất cả mọi thứ ở nhà hàng">
                        <option value="Phục vụ khách hàng, chạy bàn">
                        <option value="Nấu nướng, quản lý thức ăn">
                        <option value="Quản lý tài chính, doanh thu">
                    </datalist>
                </div>

                @if($monan="")@endif        @if($ban="")@endif      @if($datmon="")@endif   @if($nguyenlieu="")@endif 
                @if($lichlamviec="")@endif  @if($chucvu="")@endif   @if($nhanvien="")@endif @if($doanhthu="")@endif

                @if($quyens = unserialize($data['quyen']))@endif
                @for($i=0; $i<(sizeof($quyens)); $i++)
                    @switch($quyens[$i])
                        @case("Món ăn")     @if($monan = "checked")@endif      @break
                        @case("Bàn")        @if($ban = "checked")@endif        @break
                        @case("Đặt món")    @if($datmon = "checked")@endif     @break
                        @case("Nguyên liệu") @if($nguyenlieu = "checked")@endif @break
                        @case("Lịch làm việc") @if($lichlamviec = "checked")@endif @break
                        @case("Chức vụ")    @if($chucvu = "checked")@endif     @break
                        @case("Nhân viên")  @if($nhanvien = "checked")@endif   @break
                        @case("Doanh thu")  @if($doanhthu = "checked")@endif   @break
                    @endswitch
                @endfor

                <div class="card">
                    <div class="card-header"><h5>Quyền truy cập:</h5></div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Món ăn" id="1" {{$monan}} name="quyen[]" />
                            <label class="form-check-label" for="1">Quản lý Món ăn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Bàn" id="2" {{$ban}} name="quyen[]" />
                            <label class="form-check-label" for="2">Quản lý Bàn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Đặt món" id="3" {{$datmon}} name="quyen[]" />
                            <label class="form-check-label" for="3">Quản lý Đặt món</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Nguyên liệu" id="4" {{$nguyenlieu}} name="quyen[]" />
                            <label class="form-check-label" for="4">Quản lý Nguyên liệu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Lịch làm việc" id="5" {{$lichlamviec}} name="quyen[]" checked/>
                            <label class="form-check-label" for="5">Lịch làm việc </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Chức vụ" id="6" {{$chucvu}} name="quyen[]" />
                            <label class="form-check-label" for="6">Quản lý Chức vụ</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Nhân viên" id="7" {{$nhanvien}} name="quyen[]" />
                            <label class="form-check-label" for="7">Quản lý Nhân viên</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Doanh thu" id="8" {{$doanhthu}} name="quyen[]" />
                            <label class="form-check-label" for="8">Quản lý Doanh Thu</label>
                        </div>
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/User/chucvu" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection