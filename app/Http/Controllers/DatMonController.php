<?php

namespace App\Http\Controllers;

use App\Models\DatMon;
use App\Models\MonAn;
use App\Models\Ban;
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

        $datmon = DatMon::create([
            'ten_ban' => $request->input('ten_ban'),
            'ten_mon' => $request->input('ten_mon'),
            'so_luong' => $request->input('so_luong'),
            'don_gia' => $don_gia,
            'tien' => $request->input('so_luong')*$don_gia,
            
        ]);
        return Redirect('/RestaurantManager/User/datmon');

        
                	
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
        $data = DatMon::find($id);
        $monans = MonAn::all();
        $bans = Ban::all();
        return View('admin.datmon.sua', ['data'=>$data])->with('monans', $monans)->with('bans', $bans);

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
        return Redirect('/RestaurantManager/User/datmon');
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
        return Redirect('/RestaurantManager/User/datmon');
    }

    public function data(){
        $data = User::all();
        $monans = MonAn::all();
        $nguyenlieus = NguyenLieu::all();
        $bans = Ban::all();
        $datmons = DatMon::all();
        // $users = User::all();
        
        return view("admin.datmon.sua")
        ->with('data', $data)
        ->with('monans', $monans)
        ->with('nguyenlieus', $nguyenlieus)
        ->with('bans', $bans)
        ->with('datmons', $datmons)
        // ->with('users', $users)
        ;
    }
}