<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MonAn;
use App\Models\NguyenLieu;
use App\Models\Ban;
use App\Models\DatMon;
use App\Models\LichLamViec;
use App\Models\NhanVien;
use App\Models\ChucVu;
use App\Models\DoanhThu;
use App\Models\DanhGia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DanhGiaController extends Controller
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
    public function store(Request $request, $id)
    {
        $dg = DB::table('danh_gia')->where('ten_danh_gia', $request->input('ten_danh_gia'))->where('ID_nha_hang', $id)->first();
        if(DB::table('danh_gia')->where('ten_danh_gia', $request->input('ten_danh_gia'))->where('ID_nha_hang', $id)->count() > 0){
            $danhgia = DanhGia::find($dg->ID_danh_gia);
            $danhgia['danh_gia'] = $request->input('danh_gia');
            $danhgia['danh_gia_binh_luan'] = $request->input('danh_gia_binh_luan');
            $danhgia->save();
        } else {
            $danhgia = DanhGia::create([
            'ten_danh_gia' => $request->input('ten_danh_gia'),
            'danh_gia' => $request->input('danh_gia'),
            'danh_gia_binh_luan' => $request->input('danh_gia_binh_luan'),
            'ID_nha_hang' => $id,
            ]);
        }
        
        return Redirect('/NhaHang/nha-hang='.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
