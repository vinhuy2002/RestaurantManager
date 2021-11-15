<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChucVuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuc_vu', function (Blueprint $table) {
            $table->increments('ID_chuc_vu');
            $table->string('ten_chuc_vu');
            $table->string('mo_ta');
            $table->string('quyen')->nullable();
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
        Schema::dropIfExists('chuc_vu');
    }
}
