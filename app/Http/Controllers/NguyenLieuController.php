<?php

namespace App\Http\Controllers;

use App\Models\NguyenLieu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NguyenLieuController extends Controller
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

        $nguyenlieu = NguyenLieu::create([
            'ten_nguyen_lieu' => $request->input('ten_nguyen_lieu'),
            'ngay_mua' => $request->input('ngay_mua'),
            'so_luong' => $request->input('so_luong'),
            'don_gia' => $request->input('don_gia'),
            'ID_nha_hang' => $data['id'],

        ]);
        return Redirect('/User/nguyenlieu');
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
        $data = NguyenLieu::all();
        return View('admin.nguyenlieu.nguyenlieu', ['nguyenlieus'=>$data]);
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
        $data = NguyenLieu::find($id);
        return View('admin.nguyenlieu.sua', ['data'=>$data]);
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
        $nguyenlieu = NguyenLieu::find($request->ID_nguyen_lieu);
        $nguyenlieu['ID_nguyen_lieu'] = $request->ID_nguyen_lieu;
        $nguyenlieu['ten_nguyen_lieu'] = $request->ten_nguyen_lieu;
        $nguyenlieu['ngay_mua'] = $request->ngay_mua;
        $nguyenlieu['so_luong'] = $request->so_luong;
        $nguyenlieu['don_gia'] = $request->don_gia;
        $nguyenlieu->save();
        return Redirect('/User/nguyenlieu');
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
        $data = NguyenLieu::find($id);
        $data->delete();
        return Redirect('/User/nguyenlieu');
    }
}
