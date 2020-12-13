<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xuatxu extends Model
{
    use HasFactory;
    const CREATED_AT= 'xx_taoMoi';
    const UPDATED_AT = 'xx_capNhat';

    protected $table = 'xuatxu';
    protected $fillable = ['xx_ten','xx_taoMoi','xx_capNhat','xx_trangThai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['xx_ma']; //cot duoc bao ve
    protected $primaryKey = 'xx_ma';
    protected $dates = ['xx_taoMoi','xx_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
