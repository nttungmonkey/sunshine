<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;
    const CREATED_AT= 'nv_taoMoi';
    const UPDATED_AT = 'nv_capNhat';

    protected $table = 'nhanvien';
    protected $fillable = ['nv_hoTen','nv_taiKhoan','nv_matKhau','nv_gioiTinh','nv_email','nv_ngaySinh','nv_diaChi','nv_dienThoai','nv_taoMoi','nv_capNhat','nv_trangThai','q_ma'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['nv_ma']; //cot duoc bao ve
    protected $primaryKey = 'nv_ma';
    protected $dates = ['nv_ngaySinh','nv_taoMoi','nv_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
