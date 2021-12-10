@extends('admin.index')

@section('admin_content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="" style="margin-top: 10px">
                <strong>QUẢN LÝ CHỨC VỤ</strong>&ensp;
                <i class="fas fa-list"></i>
            </h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <!-- table-hover -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên chức vụ</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Quyền truy cập</th>
                            <th scope="col">Thay đổi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chucvus as $chucvu)
                            @if ($chucvu['ID_nha_hang'] == $data['id'])
                                <tr>
                                    <th scope="row">{{ $chucvu['ID_chuc_vu'] }}</th>
                                    <td>{{ $chucvu['ten_chuc_vu'] }}</td>
                                    <td>{{ $chucvu['mo_ta'] }}</td>

                                    @if ($quyens = unserialize($chucvu['quyen']))@endif
                                    <td>{{ $string = implode(', ', $quyens) }}</td>

                                    <td>
                                        <a href="/User/chucvu/sua/id={{ $chucvu['ID_chuc_vu'] }}"
                                            type="button" class="btn btn-warning btn-rounded">Sửa</a>
                                        <a href="/User/chucvu/xoa/id={{ $chucvu['ID_chuc_vu'] }}"
                                            onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                            class="btn btn-danger btn-rounded">Xóa</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>

                <script>
                    $(document).ready(function() {
                        $('#dataTable').DataTable();
                    });
                </script>
            </div>
        </div>

    </div>


    <div class="card shadow">
        <div class="card-header">
            <h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5>
        </div>
        <div class="card-body">
            <div class="float-start">
                <a href="/User/chucvu/them" type="button" class="btn btn-info">Thêm Chức vụ</a>
            </div>

            @php $macdinh = 0; @endphp

            @foreach ($chucvus as $chucvu)
                @if ($chucvu['ID_nha_hang'] == $data['id'] && ( $chucvu['ten_chuc_vu'] == 'Quản lý' || $chucvu['ten_chuc_vu'] == 'Phục vụ' || $chucvu['ten_chuc_vu'] == 'Đầu bếp' || $chucvu['ten_chuc_vu'] == 'Thu ngân' ))
                    @php $macdinh = 1; @endphp
                @endif
            @endforeach

            @if ($macdinh == 0)
                <div class="float-end">
                    <form action="/User/chucvu/chucvumacdinh" method="POST">
                        @csrf
                        <button type="submit"
                            onclick="return confirm('Bạn muốn sử dụng chức vụ mặc định mà chúng tôi đề xuất chứ ?'); "
                            class="btn btn-success btn-rounded">
                            Sử dụng chức vụ mặc định
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </div>



    <br>
@endsection
