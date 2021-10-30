<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaHang extends Model
{
    use HasFactory;

    protected $table = "nha_hangs";

    protected $primaryKey = "ID";

    public $timestamps = false;

    protected $fillable = ['Ten_nha_hang', 'Dia_chi', 'SDT', 'Email', 'Ten_dang_nhap', 'Mat_khau'];
}
