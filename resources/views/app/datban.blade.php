<div class="card mb-3 shadow-5" style="background-color: #EEEEEE">
    <div class="card-body" style="margin-top:40px">
        <center>
            <h3 class="card-title" style="text-transform: uppercase;">{{$user['Ten_nha_hang']}}</h3>
        </center>
    </div>
    <br>
</div>

<div class="container">

    <br>
    <div class="row">
        <div class="col-md-7">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/TrangChu">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="/NhaHang">Nhà hàng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$user['Ten_nha_hang']}}</li>
                </ol>

            </nav>
        </div>
        @if($alert == 1)
            <div class="col-md-5">
                <div class="alert alert-success" role="alert">
                <i class="fas fa-heart"></i>&ensp; Chúc mừng! Bạn đã đặt bàn thành công.
                </div>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="/images1/restaurant/{{$user['id']}}.jpg" alt="..." class="img-fluid rounded-start" />

                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star-half-alt text-info"></i>
                            <small class="text-muted">( 217 Đánh giá )</small>
                        </div>
                        <h3 class="card-title" style="text-transform: uppercase;">{{$user['Ten_nha_hang']}}</h3>

                        <br>
                        <p class="card-text">
                            <b>Địa chỉ:</b> {{$user['Dia_chi']}}&emsp;
                            <i class="fab fa-squarespace"></i>&emsp;
                            <b>SĐT:</b> {{$user['SDT']}}&emsp;
                            <i class="fab fa-squarespace"></i>&emsp;
                            <b>Email:</b> {{$user['email']}}
                        </p>

                        <p class="card-text">
                            <small class="text-success"><i>✔️ Không gian nhà hàng đẹp, ấm cúng, yên
                                    tĩnh.</i></small><br>
                            <small class="text-success"><i>✔️ Giá phù hợp với chất lượng món ăn.</i></small><br>
                            <small class="text-success"><i>✔️ Thích hợp với các cặp đôi, nhóm bạn hay gia
                                    đình.</i></small><br>
                            <small class="text-success"><i>✔️ Phù hợp với người ăn chay, Tùy chọn ăn chay, Tùy chọn đồ
                                    ăn không có gluten</i></small>
                        </p>

                        <button type="button" class="btn btn-info" style="margin-top: 10px" data-mdb-toggle="modal"
                            data-mdb-target="#datBan">
                            <i class="fas fa-heart"></i>
                            &ensp; Đặt bàn
                        </button>

                        <a type="button" href="#ex2-tabs-1" class="btn btn-light">Chi tiết</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="datBan" tabindex="-1" aria-labelledby="datBanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="/NhaHang/nha-hang={{$user['id']}}/datban" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="datBanLabel">NHẬP THÔNG TIN CỦA BẠN</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-outline mb-4">
                            <input type="input" class="form-control" name="ten" />
                            <label class="form-label">Tên</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="input" class="form-control" name="so_nguoi" value="1" />
                            <label class="form-label">Số người</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="input" class="form-control" name="ban" list="ten_ban" autocomplete="off"required />
                            <label class="form-label">Chọn bàn</label>
                            <datalist id="ten_ban">
                                @foreach ($bans as $ban)
                                @if($ban['ID_nha_hang'] == $user['id'])
                                <option value="{{$ban['ten_ban']}}">
                                    @endif
                                    @endforeach
                            </datalist>
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

                        <input type="hidden" class="form-control" name="ID_nha_hang" value="{{$user['id']}}" />

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-mdb-dismiss="modal">
                            Hủy
                        </button>
                        <button type="submit" class="btn btn-info">Đặt bàn ngay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="modal-dialog modal-dialog-centered">...</div> -->

    <br>
    <div class="row">
        <div class="card mb-3">
            <!-- Tabs navs -->
            <div class="container">
                <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab"
                            aria-controls="ex2-tabs-1" aria-selected="true">Mô tả nhà hàng</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab"
                            aria-controls="ex2-tabs-2" aria-selected="false">Chi tiết về nhà hàng</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3" role="tab"
                            aria-controls="ex2-tabs-3" aria-selected="false">Đánh giá</a>
                    </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->

                <div class="tab-content" id="ex2-content">
                    <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                        <br>
                        <p>✔️ Không gian nhà hàng đẹp, ấm cúng, yên tĩnh.</p>
                        <p>✔️ Giá phù hợp với chất lượng món ăn.</p>
                        <p>✔️ Thích hợp với các cặp đôi, nhóm bạn hay gia đình.</p>
                        <p>✔️ Phù hợp với người ăn chay, Tùy chọn ăn chay, Tùy chọn đồ ăn không có gluten.</p>
                        <br>
                    </div>
                    <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                        <br>
                        <p>✔️ <b>Tên nhà hàng: </b>{{$user['Ten_nha_hang']}}</p>
                        <p>✔️ <b>Địa chỉ: </b>{{$user['Dia_chi']}}</p>
                        <p>✔️ <b>SĐT: </b>{{$user['SDT']}}</p>
                        <p>✔️ <b>Email: </b>{{$user['email']}}</p>
                        <p>✔️ <b>Số lượng món ăn: </b>{{$monan}}</p>
                        <p>✔️ <b>Số lượng bàn: </b>{{$so_luong_ban}}</p>
                        <p>✔️ <b>Số lượng nhân viên: </b>{{$nhanvien}}</p>
                        <br>
                    </div>
                    <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">

                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="gCULMMol">
                        </script>

                        <div class="fb-comments" data-href="https://dxdbloger.000webhostapp.com?act=detail&id=3"
                            data-width="" data-numposts="5"></div>

                        <br>
                        <br>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>




    <br>
    <br>
    <br>


</div>