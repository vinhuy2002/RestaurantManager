<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguyenLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguyen_lieu', function (Blueprint $table) {
            $table->increments('ID_nguyen_lieu');
            $table->string('ten_nguyen_lieu');
            $table->string('ngay_mua');
            $table->string('so_luong');
            $table->string('don_gia');
            $table->unsignedInteger('ID_nha_hang')->nullable();
            $table->foreign('ID_nha_hang')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguyen_lieu');
    }
}
