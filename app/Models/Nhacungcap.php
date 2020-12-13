<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhacungcap extends Model
{
    use HasFactory;
    const CREATED_AT= 'ncc_taoMoi';
    const UPDATED_AT = 'ncc_capNhat';

    protected $table = 'nhacungcap';
    protected $fillable = ['ncc_ten','ncc_daiDien','ncc_email','ncc_diaChi','ncc_dienThoai','ncc_taoMoi','ncc_capNhat','ncc_trangThai','xx_ma'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['ncc_ma']; //cot duoc bao ve
    protected $primaryKey = 'ncc_ma';
    protected $dates = ['ncc_ngaySinh','ncc_taoMoi','ncc_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
