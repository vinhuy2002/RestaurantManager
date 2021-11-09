<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MonAn;
use App\Models\NguyenLieu;
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
            'Ten_dang_nhap' => 'required',
            'password' => 'required | min:5 | confirmed',
        ],[
            'email.unique' => 'Email đã tồn tại.',
        ]);

        User::create([
            'Ten_nha_hang' => $request->input('Ten_nha_hang'),
            'Dia_chi' => $request->input('Dia_chi'),
            'SDT' => $request->input('SDT'),
            'email' => $request->input('email'),
            'Ten_dang_nhap' => $request->input('Ten_dang_nhap'),
            'password' => Hash::make($request->input('password')),
        ]);

        // return view('admin.index')->with('route', view('admin.trangchu.trangchu'));
        return redirect()->route('auth.login');
    }


    // Login Check;
    public function loginCheck(Request $request){
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:5',
        ]);

        $userinfo = User::where('email', $request->email)->first();

        if (!$userinfo){
            return back()->with('thatbai','* Tên Email không tồn tại!');
        } else {
            if (Hash::check($request->password, $userinfo->password)){
                $request->session()->put('DangNhap', $userinfo->id);

                return view('admin.trangchu.trangchu')->with('data', User::where('id',session('DangNhap'))->first());
            } else {
                return back()->with('thatbai','* Mật khẩu nhập không đúng, vui lòng nhập lại');
            }
        }

    }

    public function dieuhuong($slug){
        $data = User::where('id',session('DangNhap'))->first();
        $monans = MonAn::all();
        $nguyenlieus = NguyenLieu::all();
        
        return view("admin.{$slug}.{$slug}")
        ->with('data', $data)
        ->with('monans', $monans)
        ->with('nguyenlieus', $nguyenlieus);
    }
}
