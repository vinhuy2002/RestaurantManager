<?php

namespace App\Http\Controllers;

use App\Models\DatMon;
use App\Models\MonAn;
use App\Models\Ban;
use App\Models\User;
use App\Models\DoanhThu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DatMonController extends Controller
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
        $monans = MonAn::all();
         foreach ($monans as $monan){
            if($monan->ten_mon == $request->input('ten_mon')){
                $don_gia = $monan['don_gia'];
            }
        }

        $data = User::where('id',session('DangNhap'))->first();

        $datmon = DatMon::create([
            'ten_ban' => $request->input('ten_ban'),
            'ten_mon' => $request->input('ten_mon'),
            'so_luong' => $request->input('so_luong'),
            'don_gia' => $don_gia,
            'tien' => $request->input('so_luong')*$don_gia,
            'ID_nha_hang' => $data['id'],
            
        ]);
        return Redirect('/User/datmon');

        
                	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data = DatMon::all();
        return View('admin.datmon.datmon', ['datmons'=>$data]);
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
        $user = User::where('id',session('DangNhap'))->first();

        $data = DatMon::find($id);
        $monans = MonAn::all();
        $bans = Ban::all();
        return View('admin.datmon.sua', ['data'=>$data])->with('monans', $monans)->with('bans', $bans)->with('user', $user);

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
        $monans = MonAn::all();
        foreach ($monans as $monan){
            if($monan->ten_mon == $request->input('ten_mon')){
                $don_gia = $monan['don_gia'];
            }
        }

        $datmon = DatMon::find($request->ID_dat_mon);
        $datmon['ten_ban'] = $request->ten_ban;
        $datmon['ten_mon'] = $request->ten_mon;
        $datmon['so_luong'] = $request->so_luong;
        $datmon['don_gia'] = $don_gia;
        $datmon['tien'] = $request->so_luong*$don_gia;
        $datmon->save();
        return Redirect('/User/datmon');
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
        $data = DatMon::find($id);
        $data->delete();
        return Redirect('/User/datmon');
    }

    
    public function thanhtoan(Request $request)
    {
        //
        $data = User::where('id',session('DangNhap'))->first();

        $tong_tien['tong_tien'] = 0;
        $datmons = DatMon::all();
         foreach ($datmons as $datmon){
            if(($datmon->ten_ban == $request->input('ten_ban')) && ($datmon->ID_nha_hang == $data['id'])){
                $tong_tien['tong_tien'] = $tong_tien['tong_tien'] + $datmon['tien'];
            }
        }

        $tong_tien['ten_ban_thanh_toan'] = $request->input('ten_ban');
        
        $bans = Ban::all();
        $monans = MonAn::all();
        return View('admin.datmon.datmon', ['tong_tien'=>$tong_tien])->with('bans', $bans)->with('monans', $monans)->with('datmons', $datmons)->with('data', $data);
    }

    public function xoadulieuban($ban)
    {
        //
        $user = User::where('id',session('DangNhap'))->first();

        $datmons = DatMon::all();
        foreach ($datmons as $datmon){
            if(($datmon->ten_ban == $ban) && ($datmon->ID_nha_hang == $user['id'])){

                $doanhthu = DoanhThu::create([
                    'ten_ban' => $datmon->ten_ban,
                    'ten_mon' => $datmon->ten_mon,
                    'so_luong' => $datmon->so_luong,
                    'tien' => $datmon->tien,
                    'ID_nha_hang' => $user['id'],
                    
                ]);

                $data = DatMon::find($datmon->ID_dat_mon);
                $data->delete();
            }
        }
        return Redirect('/User/datmon');
    }

    public function chuyenban(Request $request)
    {
        //
        $user = User::where('id',session('DangNhap'))->first();

        $datmons = DatMon::all();
        foreach ($datmons as $datmon){
            if(($datmon->ten_ban == $request->input('ban_hien_tai')) && ($datmon->ID_nha_hang == $user['id'])){
                $data = DatMon::find($datmon->ID_dat_mon);
                $data['ten_ban'] = $request->input('ban_chuyen_den');
                $data->save();
            }
        }
        return Redirect('/User/datmon');
    }
}