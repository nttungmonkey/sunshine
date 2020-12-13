<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;
    const CREATED_AT= 'sp_taoMoi';
    const UPDATED_AT = 'sp_capNhat';

    protected $table = 'sanpham';
    protected $fillable = ['sp_ten','sp_taoMoi','sp_capNhat','sp_trangThai','sp_giaGoc','sp_giaBan', 'sp_hinh','sp_thongTin','sp_danhGia','l_ma'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['sp_ma']; //cot duoc bao ve
    protected $primaryKey = 'sp_ma';
    protected $dates = ['sp_taoMoi','sp_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';

    public function loaisanpham(){
        return $this->belongsTo('App\Models\Loai','l_ma','l_ma');//Khoa ngoai truoc, khoa chinh sau
    }
}
