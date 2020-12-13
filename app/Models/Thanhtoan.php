<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thanhtoan extends Model
{
    use HasFactory;
    const CREATED_AT= 'tt_taoMoi';
    const UPDATED_AT = 'tt_capNhat';

    protected $table = 'thanhtoan';
    protected $fillable = ['tt_ten','tt_taoMoi','tt_capNhat','tt_trangThai','tt_dienGiai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['tt_ma']; //cot duoc bao ve
    protected $primaryKey = 'tt_ma';
    protected $dates = ['tt_taoMoi','tt_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
