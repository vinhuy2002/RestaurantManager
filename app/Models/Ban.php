<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    use HasFactory;

    protected $table = "ban";

    protected $primaryKey = "ID_ban";

    public $timestamps = false;

    protected $fillable = ['ten_ban', 'trang_thai', 'dat_truoc', 'ID_nha_hang', 'datban_ten', 'datban_so_nguoi', 'datban_ngay', 'datban_time'];
}
