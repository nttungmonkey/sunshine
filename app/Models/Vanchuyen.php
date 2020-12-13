<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vanchuyen extends Model
{
    use HasFactory;
    const CREATED_AT= 'vc_taoMoi';
    const UPDATED_AT = 'vc_capNhat';

    protected $table = 'vanchuyen';
    protected $fillable = ['vc_ten','vc_taoMoi','vc_capNhat','vc_trangThai','vc_dienGiai','vc_chiPhi'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['vc_ma']; //cot duoc bao ve
    protected $primaryKey = 'vc_ma';
    protected $dates = ['vc_taoMoi','vc_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
