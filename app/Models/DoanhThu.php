<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoanhThu extends Model
{
    use HasFactory;
    
    protected $table = "doanh_thu";

    protected $primaryKey = "ID_doanh_thu";

    public $timestamps = true;

    protected $fillable = ['ten_ban', 'ten_mon', 'so_luong', 'tien', 'ID_nha_hang'];
}
