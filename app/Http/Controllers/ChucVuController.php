<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ChucVuController extends Controller
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
        $data = User::where('id',session('DangNhap'))->first();
        
        $chucvu = ChucVu::create([
            'ten_chuc_vu' => $request->input('ten_chuc_vu'),
            'mo_ta' => $request->input('mo_ta'),
            'quyen' => serialize($request->input('quyen')),
            'ID_nha_hang' => $data['id'],
            
        ]);

        // unserialize();
        // return $request->input('quyen');
        return Redirect('/User/chucvu');
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
        $data = ChucVu::all();
        return View('admin.chucvu.chucvu', ['chucvus'=>$data]);
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
        $data = ChucVu::find($id);
        return View('admin.chucvu.sua', ['data'=>$data]);
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
        // update
        $chucvu = ChucVu::find($request->ID_chuc_vu);
        $chucvu['ID_chuc_vu'] = $request->ID_chuc_vu;
        $chucvu['ten_chuc_vu'] = $request->ten_chuc_vu;
        $chucvu['mo_ta'] = $request->mo_ta;
        $chucvu['quyen'] = serialize($request->quyen);

        // return $chucvu;
        $chucvu->save();
        return Redirect('/User/chucvu');

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
        $data = ChucVu::find($id);
        $data->delete();
        return Redirect('/User/chucvu');
    }


    public function chucvumacdinh()
    {
        //
        $data = User::where('id',session('DangNhap'))->first();
        
        $quanly = ChucVu::create([
            'ten_chuc_vu' => 'Quản lý',
            'mo_ta' => 'Quản lý tất cả mọi thứ ở nhà hàng',
            'quyen' => serialize(["Món ăn","Bàn","Đặt món","Nguyên liệu","Lịch làm việc","Chức vụ","Nhân viên","Doanh thu"]),
            'ID_nha_hang' => $data['id'],
        ]);

        $phucvu = ChucVu::create([
            'ten_chuc_vu' => 'Phục vụ',
            'mo_ta' => 'Phục vụ khách hàng, chạy bàn',
            'quyen' => serialize(["Đặt món","Lịch làm việc"]),
            'ID_nha_hang' => $data['id'],
            
        ]);

        $daubep = ChucVu::create([
            'ten_chuc_vu' => 'Đầu bếp',
            'mo_ta' => 'Nấu nướng, quản lý thức ăn',
            'quyen' => serialize(["Món ăn","Nguyên liệu","Lịch làm việc"]),
            'ID_nha_hang' => $data['id'],
            
        ]);

        $thungan = ChucVu::create([
            'ten_chuc_vu' => 'Thu ngân',
            'mo_ta' => 'Quản lý tài chính, doanh thu',
            'quyen' => serialize(["Món ăn","Bàn","Đặt món","Nguyên liệu","Lịch làm việc","Doanh thu"]),
            'ID_nha_hang' => $data['id'],
            
        ]);

        // unserialize();
        return Redirect('/User/chucvu');
    }

}
