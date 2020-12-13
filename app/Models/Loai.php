<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    use HasFactory;
    const CREATED_AT= 'l_taoMoi';
    const UPDATED_AT = 'l_capNhat';

    protected $table = 'loai';
    protected $fillable = ['l_ten','l_taoMoi','l_capNhat','l_trangThai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['l_ma']; //cot duoc bao ve
    protected $primaryKey = 'l_ma';
    protected $dates = ['l_taoMoi','l_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';

    public function sanPhams(){
        return $this->hasMany('App\Models\Sanpham','l_ma','l_ma');//Khoa ngoai truoc, khoa chinh sau
    }
}
