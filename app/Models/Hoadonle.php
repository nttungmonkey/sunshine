<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadonle extends Model
{
    use HasFactory;

    protected $table = 'hoadonle';
    protected $fillable = ['hdl_nguoiMuaHang','hdl_diaChi','hdl_dienThoai','nv_lapHoaDon','hdl-ngayXuatHoaDon','dh_ma'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['hdl_ma']; //cot duoc bao ve
    protected $primaryKey = 'hdl_ma';
    protected $dates = ['hdl_ngayXuatHoaDon']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
