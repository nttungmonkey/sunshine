<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadonsi extends Model
{
    use HasFactory;
    const CREATED_AT= 'hds_taoMoi';
    const UPDATED_AT = 'hds_capNhat';

    protected $table = 'hoadonsi';
    protected $fillable = ['hds_nguoiMuaHang','hds_tenDonVi','hds_diaChi','hds_maSoThue','hds_soTaiKhoan','nv_lapHoaDon','nv_thuTruong','hds-ngayXuatHoaDon','hds_taoMoi','hds_capNhat','hds_trangThai','dh_ma','tt_ma'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['hds_ma']; //cot duoc bao ve
    protected $primaryKey = 'hds_ma';
    protected $dates = ['hds_ngayXuatHoaDon','hds_taoMoi','hds_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
