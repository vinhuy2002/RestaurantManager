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

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use App\Exports\DoanhThuExport;
use Maatwebsite\Excel\Facades\Excel;

class DoanhThuController extends Controller
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
        $data = User::where('id',session('DangNhap'))->first();
        $tong_doanh_thu = array();
        $bat_dau = '';
        $ket_thuc = '';

        $doanhthus = DoanhThu::all();
        return View('admin.doanhthu.doanhthu', ['doanhthus'=>$doanhthus])
            ->with('data', $data)
            ->with('tong_doanh_thu', $tong_doanh_thu)
            ->with('bat_dau', $bat_dau)
            ->with('ket_thuc', $ket_thuc)
        ;
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
    public function update(Request $request)
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

    public function thongke(Request $request)
    {
        //
        $data = User::where('id',session('DangNhap'))->first();

        if($request->input('ket_thuc')){
            $doanhthus = DB::table('doanh_thu')
                ->where('ID_nha_hang', session('DangNhap'))
                ->whereDate('created_at', '>=',$request->input('bat_dau'))
                ->whereDate('created_at', '<=',$request->input('ket_thuc'))
                ->get()
            ;
        } else {
            $doanhthus = DB::table('doanh_thu')
                ->where('ID_nha_hang', session('DangNhap'))
                ->whereDate('created_at',$request->input('bat_dau'))
                ->get()
            ;
        }

        $tong_doanh_thu['so_don_hang'] = 0;
        $tong_doanh_thu['tong_doanh_thu'] = 0;
        foreach ($doanhthus as $doanhthu){
            $tong_doanh_thu['so_don_hang'] =  $tong_doanh_thu['so_don_hang'] + 1;
            $tong_doanh_thu['tong_doanh_thu'] = $tong_doanh_thu['tong_doanh_thu'] + $doanhthu->tien;
        }

        $tong_doanh_thu['tong_loi_nhuan'] = $tong_doanh_thu['tong_doanh_thu'] - ($tong_doanh_thu['tong_doanh_thu'] * 0.0767);
        $tong_doanh_thu['loi_nhuan'] = 92.33;

        return View('admin.doanhthu.doanhthu', ['doanhthus'=>$doanhthus])
            ->with('data', $data)
            ->with('tong_doanh_thu', $tong_doanh_thu)
            ->with('bat_dau', $request->input('bat_dau'))
            ->with('ket_thuc', $request->input('ket_thuc'))
        ;
        
    }

    public function export(Request $request)
    {
        //
        return Excel::download(new DoanhThuExport, 'doanhthu.xlsx');
    }
}