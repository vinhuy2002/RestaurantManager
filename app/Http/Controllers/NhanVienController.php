<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use App\Models\ChucVu;
use App\Models\User;
use App\Models\Ban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $idCV = ChucVu::where('ten_chuc_vu', $request->input('chuc_vu'))->first();
        // dd($idCV);

        $data = User::where('id',session('DangNhap'))->first();

        $request->validate([
            'ten_nhan_vien' => 'required',
            'chuc_vu' => 'required',
            'gioi_tinh' => 'required',
            'dia_chi' => 'required',
            'sdt' => 'required | digits:10',
            'tai_khoan' => 'required',
            'mat_khau' => 'required',
        ],
        [
            'ten_nhan_vien.required' => '* Tên nhân viên không được để trống.',
            'chuc_vu.required' => '* Chức vụ không được để trống.',
            'gioi_tinh.required' => '* Giới tính không được để trống.',
            'dia_chi.required' => '* Địa chỉ không được để trống.',
            'sdt.required' => '* Số điện thoại không được để trống.',
            'tai_khoan.required' => '* Tài khoản không được để trống.',
            'mat_khau.required' => '* Mật khẩu không được để trống.',
            'sdt.digits' => '* Số điện thoại phải có 10 số.',
        ]);


        $nhanvien = NhanVien::create([
            'ten_nhan_vien' => $request->input('ten_nhan_vien'),
            'chuc_vu_id' => $idCV->ID_chuc_vu,
            'chuc_vu' => $request->input('chuc_vu'),
            'gioi_tinh' => $request->input('gioi_tinh'),
            'dia_chi' => $request->input('dia_chi'),
            'sdt' => $request->input('sdt'),
            'tai_khoan' => $request->input('tai_khoan'),
            'mat_khau' => $request->input('mat_khau'),
            'ban_quan_ly' => $request->input('ban_quan_ly'),
            'thu_lam_viec' => serialize($request->input('thu_lam_viec')),
            'gio_lam_viec' => $request->input('gio_lam_viec'),
            'ID_nha_hang' => $data['id'],
        ]);

        return Redirect('/User/nhanvien');

    }

    public function them(){
        $data = User::where('id',session('DangNhap'))->first();

        $chucvus = ChucVu::all();
        return View('admin.nhanvien.them', ['chucvus'=>$chucvus])->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // hiển thị
        $chucvus = ChucVu::all();

        $nhanviens = NhanVien::all();
        return View('admin.nhanvien.nhanvien', ['nhanviens'=>$nhanviens])->with('chucvus', $chucvus);
    }

    public function xem($id)
    {
        // hiển thị
        $chucvus = ChucVu::all();
        $data = User::where('id',session('DangNhap'))->first();

        $nhanvien = NhanVien::find($id);
        return View('admin.nhanvien.xem', ['nhanvien'=>$nhanvien])->with('chucvus', $chucvus)->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // sửa
        $user = User::where('id',session('DangNhap'))->first();
        $data = NhanVien::find($id);
        $chucvus = ChucVu::all();
        $bans = Ban::all();
        return View('admin.nhanvien.sua', ['data'=>$data])->with('chucvus', $chucvus)->with('bans', $bans)->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $nhanvien = NhanVien::find($request->ID_nhan_vien);
        $nhanvien['ID_nhan_vien'] = $request->ID_nhan_vien;
        $nhanvien['ten_nhan_vien'] = $request->ten_nhan_vien;
        $nhanvien['chuc_vu'] = $request->chuc_vu;
        $nhanvien['gioi_tinh'] = $request->gioi_tinh;
        $nhanvien['dia_chi'] = $request->dia_chi;
        $nhanvien['sdt'] = $request->sdt;
        $nhanvien['tai_khoan'] = $request->tai_khoan;
        $nhanvien['mat_khau'] = $request->mat_khau;
        $nhanvien['ban_quan_ly'] = $request->ban_quan_ly;
        $nhanvien['thu_lam_viec'] = serialize($request->input('thu_lam_viec'));
        $nhanvien['gio_lam_viec'] = $request->gio_lam_viec;

        $nhanvien->save();
        return Redirect('/User/nhanvien');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xóa
        $data = NhanVien::find($id);
        $data->delete();
        return Redirect('/User/nhanvien');
    }
}
