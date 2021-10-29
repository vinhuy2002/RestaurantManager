<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function dieuhuong($slug){
        $path = view("admin.{$slug}.{$slug}");

        // Có 2 cách:

        // return view('admin.index',[
        //     'route' => $path,
        // ]);

        return view('admin.index')->with('route',$path);
    }
}
