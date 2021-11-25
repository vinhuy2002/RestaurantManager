<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected $table = "nhan_vien";

    protected $primaryKey = "ID_nhan_vien";

    public $timestamps = false;

    protected $fillable = [
        'ten_nhan_vien', 'chuc_vu_id', 'chuc_vu', 'gioi_tinh', 'dia_chi', 'sdt', 
        'tai_khoan', 'mat_khau', 'ban_quan_ly', 'thu_lam_viec', 'gio_lam_viec', 'ID_nha_hang'
    ];

    public function chucVu(){
        return $this->belongsTo(ChucVu::class);
    }
}
