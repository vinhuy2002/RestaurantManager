<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MonAn;
use App\Models\NguyenLieu;
use App\Models\Ban;
use App\Models\DatMon;
use App\Models\LichLamViec;
use App\Models\NhanVien;
use App\Models\DoanhThu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    //
    public function index(){
        return view('index')->with('route', 'TrangChu');
    }

    public function aboutUs(){
        return view('index')->with('route', 'GioiThieu');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    // Register;
    public function storeReg(Request $request){
        $request->validate([
            'Ten_nha_hang' => 'required',
            'Dia_chi' => 'required',
            'SDT' => 'required',
            'email' => 'required | email | unique:users',
            'Ten_dang_nhap' => 'required | unique:users',
            'password' => 'required | min:5 | confirmed',
        ],[
            'email.unique' => '* Email đã tồn tại.',
            'Ten_dang_nhap.unique' => '* Tên đăng nhập đã tồn tại.',
            'password.min' => '* Mật khẩu phải chứa ít nhất 5 kí tự.',
            'password.confirmed' => '* Mật khẩu xác nhận nhập không đúng.',
        ]);

        User::create([
            'Ten_nha_hang' => $request->input('Ten_nha_hang'),
            'Dia_chi' => $request->input('Dia_chi'),
            'SDT' => $request->input('SDT'),
            'email' => $request->input('email'),
            'Ten_dang_nhap' => $request->input('Ten_dang_nhap'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('auth.login');
    }


    // Login Check;
    public function loginCheck(Request $request){
        $request->validate([
            'ten_dang_nhap' => 'required',
            'password' => 'required | min:5',
        ]);

        $userinfoEmail = User::where('email', $request->ten_dang_nhap)->first();
        $userinfoUser = User::where('Ten_dang_nhap', $request->ten_dang_nhap)->first();

        if (!$userinfoEmail){
            
            if (!$userinfoUser){
                return back()->with('thatbai','* Tên đăng nhập hoặc Email không tồn tại!');
            } else {
                if (Hash::check($request->password, $userinfoUser->password)){
                    $request->session()->put('DangNhap', $userinfoUser->id);
    
                    return view('admin.trangchu.trangchu')->with('data', User::where('id',session('DangNhap'))->first());
                } else {
                    return back()->with('thatbai','* Mật khẩu nhập không đúng, vui lòng nhập lại');
                }
            }
        } else {
            if (Hash::check($request->password, $userinfoEmail->password)){
                $request->session()->put('DangNhap', $userinfoEmail->id);

                return view('admin.trangchu.trangchu')->with('data', User::where('id',session('DangNhap'))->first());
            } else {
                return back()->with('thatbai','* Mật khẩu nhập không đúng, vui lòng nhập lại');
            }
        }

        // $userinfoUser = User::where('Ten_dang_nhap', $request->ten_dang_nhap)->first();
        // if (!$userinfoUser){
        //     return back()->with('thatbai','* Tên đăng nhập hoặc Email không tồn tại!');
        // } else {
        //     if (Hash::check($request->password, $userinfoUser->password)){
        //         $request->session()->put('DangNhap', $userinfoUser->id);

        //         return view('admin.trangchu.trangchu')->with('data', User::where('id',session('DangNhap'))->first());
        //     } else {
        //         return back()->with('thatbai','* Mật khẩu nhập không đúng, vui lòng nhập lại');
        //     }
        // }

    }

    public function dieuhuong($slug){
        $data = User::where('id',session('DangNhap'))->first();
        $monans = MonAn::all();
        $nguyenlieus = NguyenLieu::all();
        $bans = Ban::all();
        $users = User::all();
        
        return view("admin.{$slug}.{$slug}")
        ->with('data', $data)
        ->with('monans', $monans)
        ->with('nguyenlieus', $nguyenlieus)
        ->with('bans', $bans)
        ->with('users', $users);
    }

    function dangXuat(){
        if (session()->has('DangNhap')){
            session()->pull('DangNhap');
            return redirect('/');
        }
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
        $data = User::find($id);
        return View('admin.trangchu.sua', ['data'=>$data]);
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
        /// update
        $data = User::find($request->id);
        $data['Ten_nha_hang'] = $request->Ten_nha_hang;
        $data['Dia_chi'] = $request->Dia_chi;
        $data['SDT'] = $request->SDT;
        $data['email'] = $request->email;
        $data['Ten_dang_nhap'] = $request->Ten_dang_nhap;
        $data['password'] = $request->password;
        // $data['password'] = Hash::make($request->password);

        $data->save();
        return Redirect('/RestaurantManager/User/trangchu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /// xóa
        $data = User::find($id);
        $data->delete();
        return Redirect('/');
    }
}
