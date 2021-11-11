<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonAn extends Model
{
    use HasFactory;

    protected $table = "mon_an";

    protected $primaryKey = "ID_mon";

    public $timestamps = false;

    protected $fillable = ['loai', 'ten_mon', 'don_gia', 'ID_nha_hang'];
}
