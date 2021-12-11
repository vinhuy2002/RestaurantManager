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
            'Ten_nha_hang' => 'BangPhan',
            'Dia_chi' => 'Phú An, Thừa Thiên Huế',
            'SDT' => '0123456788',
            'email' => 'pvbang23092002@gmail.com',
            'Ten_dang_nhap' => 'bang',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'Ten_nha_hang' => 'VinhUy',
            'Dia_chi' => 'Thuân An, Thừa Thiên Huế',
            'SDT' => '0123456789',
            'email' => 'vinhuy@gmail.com',
            'Ten_dang_nhap' => 'vinhuy',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'Ten_nha_hang' => 'Test',
            'Dia_chi' => '470 Đường Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng',
            'SDT' => '0123456777',
            'email' => 'test@gmail.com',
            'Ten_dang_nhap' => 'test',
            'password' => Hash::make('123456789'),
        ]);
    }
}
