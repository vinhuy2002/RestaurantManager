<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_an', function (Blueprint $table) {
            $table->increments('ID_mon');
            $table->string('loai');
            $table->string('ten_mon');
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
        Schema::dropIfExists('mon_an');
    }
}
