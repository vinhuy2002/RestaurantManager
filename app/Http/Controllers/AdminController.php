<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index')->with('route',view('admin.trangchu.trangchu'));
    }

    public function dieuhuong($id, $slug){
        $path = view("admin.{$slug}.{$slug}");

        return view('admin.index')->with('route',$path);
    }
}
