<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phieunhap extends Model
{
    use HasFactory;
    const CREATED_AT= 'pn_taoMoi';
    const UPDATED_AT = 'pn_capNhat';

    protected $table = 'phieunhap';
    protected $fillable = ['pn_nguoiGiao','pn_soHoaDon','pn_ghiChu','nv_nguoiLapPhieu','nv_keToan','nv_thuKho','ncc_ma','pn_trangThai','pn_ngayXuatHoaDon','pn_ngayLapPhieu','pn_ngayXacNhan','pn_ngayNhapKho','pn_taoMoi','pn_capNhat'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['pn_ma']; //cot duoc bao ve
    protected $primaryKey = 'pn_ma';
    protected $dates = ['pn_ngayXuatHoaDon','pn_ngayLapPhieu','pn_ngayXacNhan','pn_ngayNhapKho','pn_taoMoi','pn_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
