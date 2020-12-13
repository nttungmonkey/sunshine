<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    use HasFactory;
    const CREATED_AT= 'dh_taoMoi';
    const UPDATED_AT = 'dh_capNhat';

    protected $table = 'donhang';
    protected $fillable = ['kh_ma','dh_thoiGianDatHang','dh_thoiGianNhanHang','dh_nguoiNhan','dh_nguoiGui','dh_diaChi','dh_dienThoai','dh_loiChuc','dh_daThanhToan','nv_xuly','nv_giaoHang','dh_ngayXuLy','dh_ngayLapPhieuGiao','dh_ngayGiaoHang','vc_ma','tt_ma','dh_taoMoi','dh_capNhat','dh_trangThai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['dh_ma']; //cot duoc bao ve
    protected $primaryKey = 'dh_ma';
    protected $dates = ['dh_thoiGianDatHang','dh_thoiGianNhanHang','dh_ngayGiaoHang','dh_ngayXuLy','dh_ngayLapPhieuGiao','dh_taoMoi','dh_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
