<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    use HasFactory;
    
    protected $table = "chuc_vu";

    protected $primaryKey = "ID_chuc_vu";

    public $timestamps = false;

    protected $fillable = ['ten_chuc_vu', 'mo_ta', 'quyen', 'ID_nha_hang'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function nhanVien(){
        return $this->hasMany(NhanVien::class);
    }
}
