<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatMon extends Model
{
    use HasFactory;

    protected $table = "dat_mon";

    protected $primaryKey = "ID_dat_mon";

    public $timestamps = false;

    protected $fillable = ['ten_ban', 'ten_mon', 'so_luong', 'don_gia', 'tien', 'ID_nha_hang'];

}
