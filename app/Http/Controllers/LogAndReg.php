<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogAndReg extends Controller
{
    public function login(){
        // $username = DB::select('SELECT * FROM nha_hangs ')
        $id = 1;
        $username = DB::select('select * from nha_hangs');

        dd($username);
    }
}
