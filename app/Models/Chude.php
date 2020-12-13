<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chude extends Model
{
    use HasFactory;
    const CREATED_AT= 'cd_taoMoi';
    const UPDATED_AT = 'cd_capNhat';

    protected $table = 'chude';
    protected $fillable = ['cd_ten','cd_taoMoi','cd_capNhat','cd_trangThai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['cd_ma']; //cot duoc bao ve
    protected $primaryKey = 'cd_ma';
    protected $dates = ['cd_taoMoi','cd_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
