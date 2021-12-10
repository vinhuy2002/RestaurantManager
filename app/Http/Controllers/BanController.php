<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BanController extends Controller
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

        $ban = Ban::create([
            'ten_ban' => $request->input('ten_ban'),
            'trang_thai' => $request->input('trang_thai'),
            'dat_truoc' => $request->input('dat_truoc'),
            'ID_nha_hang' => $data['id'],

        ]);

        return Redirect('/User/ban');

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
         $data = Ban::all();
         return View('admin.ban.ban', ['bans'=>$data]);
    }

    public function xem($id)
    {
         // hiển thị
         $data = Ban::find($id);
         return View('admin.ban.xem', ['data'=>$data]);
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
        $data = Ban::find($id);
        return View('admin.ban.sua', ['data'=>$data]);
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
         $ban = Ban::find($request->ID_ban);
         $ban['ID_ban'] = $request->ID_ban;
         $ban['ten_ban'] = $request->ten_ban;
         $ban['trang_thai'] = $request->trang_thai;
        //  $ban['dat_truoc'] = $request->dat_truoc;
         $ban->save();
         return Redirect('/User/ban');
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
        $data = Ban::find($id);
        $data->delete();
        return Redirect('/User/ban');
    }

    public function datban(Request $request){
        $bans = Ban::all();

        foreach($bans as $bann){
            if(($bann['ten_ban'] == $request->ten_ban) && ($bann['ID_nha_hang'] == $request->ID_nha_hang)){
                $ban = Ban::find($bann['ID_ban']);
                $ban['dat_truoc'] = $request->time.' ngày '.$request->ngay;
                $ban['datban_ten'] = $request->datban_ten;
                $ban['datban_so_nguoi'] = $request->so_nguoi;
                $ban['datban_ngay'] = $request->ngay;
                $ban['datban_time'] = $request->time;

                $ban->save();
            }
        }

        return Redirect('/User/ban');
    }

}
