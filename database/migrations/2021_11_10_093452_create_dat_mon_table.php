<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatMonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_mon', function (Blueprint $table) {
            $table->increments('ID_dat_mon');
            $table->string('ten_ban');
            $table->string('ten_mon');
            $table->string('so_luong');
            $table->string('don_gia');
            $table->string('tien');
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
        Schema::dropIfExists('dat_mon');
    }
}
