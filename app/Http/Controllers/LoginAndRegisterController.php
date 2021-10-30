<?php

namespace App\Http\Controllers;

use App\Models\NhaHang;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;

class LoginAndRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $usernameCHK = NhaHang::where('ID',);
        // dd($username);
        // return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('index');
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
        $restaurant = NhaHang::create([
            'Ten_nha_hang' => $request->input('tennhahang'),
            'Dia_chi' => $request->input('diachi'),
            'SDT' => $request->input('sdt'),
            'Email' => $request->input('email'),
            'Ten_dang_nhap' => $request->input('tendangnhap'),
            'Mat_khau' => $request->input('mk1')
        ]);
        return redirect('/');
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
