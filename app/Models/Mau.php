<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mau extends Model
{
    use HasFactory;
    const CREATED_AT= 'm_taoMoi';
    const UPDATED_AT = 'm_capNhat';

    protected $table = 'mau';
    protected $fillable = ['m_ten','m_taoMoi','m_capNhat','m_trangThai'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['m_ma']; //cot duoc bao ve
    protected $primaryKey = 'm_ma';
    protected $dates = ['m_taoMoi','m_capNhat']; //Tu dong convert thanh Carbon::human(), xu ly ngay thang gio trong laravel
    protected $dateFormat = 'Y-m-d H:i:s';
}
