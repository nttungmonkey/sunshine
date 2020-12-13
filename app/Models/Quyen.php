<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quyen extends Model
{
    use HasFactory;
    const CREATED_AT= 'q_taoMoi';
    const UPDATED_AT = 'q_capNhat';

    protected $table = 'quyen';
    protected $fillable = ['q_ten','q_dienGiai','q_taoMoi','q_capNhat','q_trangThai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['q_ma']; //cot duoc bao ve
    protected $primaryKey = 'q_ma';
    protected $dates = ['q_taoMoi','q_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
