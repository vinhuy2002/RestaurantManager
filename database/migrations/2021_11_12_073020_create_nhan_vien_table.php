<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->increments('ID_nhan_vien');
            $table->unsignedInteger('chuc_vu_id'); // răng lại để unique :v một nhà hàng có nhiều nhân viên cùng chức vụ mà, như phục vụ, đầu bếp
            $table->string('ten_nhan_vien');
            $table->string('chuc_vu')->nullable();
            $table->string('gioi_tinh')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('sdt')->nullable();
            $table->string('tai_khoan');
            $table->string('mat_khau');
            $table->string('ban_quan_ly')->nullable();
            $table->string('thu_lam_viec')->nullable();
            $table->string('gio_lam_viec')->nullable();
            $table->unsignedInteger('ID_nha_hang')->nullable();
            
            $table->foreign('chuc_vu_id')->references('ID_chuc_vu')->on('chuc_vu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_vien');
    }
}