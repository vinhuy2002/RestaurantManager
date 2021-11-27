<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ban', function (Blueprint $table) {
            $table->increments('ID_ban');
            $table->string('ten_ban');
            $table->string('trang_thai');
            $table->string('dat_truoc');
            $table->unsignedInteger('ID_nha_hang')->nullable();
            $table->string('datban_ten')->nullable();
            $table->string('datban_so_nguoi')->nullable();
            $table->string('datban_ngay')->nullable();
            $table->string('datban_time')->nullable();
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
        Schema::dropIfExists('ban');
    }
}
