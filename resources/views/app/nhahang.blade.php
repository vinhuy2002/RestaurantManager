<div class="card mb-3 shadow-5" style="background-color: #EEEEEE">
    <div class="card-body" style="margin-top:40px">
        <center>
            <h3 class="card-title">DANH SÁCH CÁC NHÀ HÀNG</h3>
        </center>
    </div>
    <br>
</div>

<div class="container">

    <br>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nhà hàng</li>
        </ol>
    </nav>

    <br>

    <div class="row">
        @foreach($users as $user)

        <div class="col-md-6">
            <div class="card" style="margin-bottom: 25px">
                <a href="/NhaHang/nha-hang={{$user->id}}" class="text-dark">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <div class="bg-image">
                            <img src="/images1/restaurant/{{$user->id}}.jpg" class="img-fluid" />
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>

                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
                                <div class="justify-content-center align-items-center h-100 " style="margin:20px">
                                    <h4 class="text-white mb-0" style="text-transform: uppercase;">Nhà hàng {{$user->Ten_nha_hang}}</h4><br>
                                    <p class="text-white mb-0">Địa chỉ: {{$user->Dia_chi}}</p>
                                    <p class="text-white mb-0">SĐT: {{$user->SDT}}</p>
                                    <p class="text-white mb-0">Email: {{$user->email}}</p>
                                </div>
                            </div>

							<h4 class="text-white rounded" style="position: absolute; bottom: 10px; right: 16px; background-color: rgba(0, 0, 0, 0.8); padding:15px">Nhà hàng {{$user->Ten_nha_hang}}</h4>
						</div>
                    </div>

                </a>
            </div>
        </div>

        @endforeach
    </div>



    <br>
    <br>
    <br>


</div>