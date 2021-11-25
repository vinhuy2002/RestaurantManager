<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Ten_nha_hang' => 'Nhà hàng BangPhan',
            'Dia_chi' => 'Thừa Thiên Huế',
            'SDT' => '0123456789',
            'email' => 'pvbang23092002@gmail.com',
            'Ten_dang_nhap' => 'bang',
            'password' => Hash::make('123456789'),
        ]);
    }
}
