<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    use HasFactory;
    const CREATED_AT= 'kh_taoMoi';
    const UPDATED_AT = 'kh_capNhat';

    protected $table = 'khachhang';
    protected $fillable = ['kh_hoTen','kh_taiKhoan','kh_matKhau','kh_gioiTinh','kh_email','kh_ngaySinh','kh_diaChi','kh_dienThoai','kh_taoMoi','kh_capNhat','kh_trangThai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['kh_ma']; //cot duoc bao ve
    protected $primaryKey = 'kh_ma';
    protected $dates = ['kh_ngaySinh','kh_taoMoi','kh_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
