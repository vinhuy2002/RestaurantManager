<?php

namespace App\Http\Controllers;

use App\Models\MonAn;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MonAnController extends Controller
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
        // tạo mới
        $data = User::where('id',session('DangNhap'))->first();
        $monan = MonAn::create([
            'loai' => $request->input('loai'),
            'ten_mon' => $request->input('ten_mon'),
            'don_gia' => $request->input('don_gia'),
            'ID_nha_hang' => $data['id'],
        ]);
        return Redirect('/User/monan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // hiển thị
        $data = MonAn::all();
        return View('admin.monan.monan', ['monans'=>$data]);
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
        $data = MonAn::find($id);
        return View('admin.monan.sua', ['data'=>$data]);

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
        $monan = MonAn::find($request->ID_mon);
        $monan['loai'] = $request->loai;
        $monan['ten_mon'] = $request->ten_mon;
        $monan['don_gia'] = $request->don_gia;
        $monan->save();
        return Redirect('/User/monan');

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
        $data = MonAn::find($id);
        $data->delete();
        return Redirect('/User/monan');

    }
}
