<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gopy extends Model
{
    use HasFactory;
    protected $table = 'gopy';
    protected $fillable = ['gy_thoiGian','gy_noiDung','gy_trangThai','kh_ma','sp_ma'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['gy_ma']; //cot duoc bao ve
    protected $primaryKey = 'gy_ma';
    protected $dates = 'gy_thoiGian'; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
