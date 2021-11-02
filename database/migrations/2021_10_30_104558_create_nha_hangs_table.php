<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhaHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('nha_hangs', function (Blueprint $table) {
        //     $table->increments('ID');
        //     $table->string('Ten_nha_hang');
        //     $table->string('Dia_chi');
        //     $table->string('SDT');
        //     $table->string('Email');
        //     $table->string('Ten_dang_nhap');
        //     $table->string('Mat_khau');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nha_hangs');
    }
}
