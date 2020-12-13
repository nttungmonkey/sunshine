<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khuyenmai extends Model
{
    use HasFactory;
    const CREATED_AT= 'km_taoMoi';
    const UPDATED_AT = 'km_capNhat';

    protected $table = 'khuyenmai';
    protected $fillable = ['km_ten','km_noiDung','km_giaTri','nv_nguoiLap','nv_kyNhay','nv_kyDuyet','km_batDau','km_ketThuc','km_ngayLap','km_ngayKyNhay','km_ngayDuyet','km_taoMoi','km_capNhat','km_trangThai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['km_ma']; //cot duoc bao ve
    protected $primaryKey = 'km_ma';
    protected $dates = ['km_batDau','km_ketThuc','km_ngayLap','km_ngayKyNhay','km_ngayDuyet','km_taoMoi','km_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
