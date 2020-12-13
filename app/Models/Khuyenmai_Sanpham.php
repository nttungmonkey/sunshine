<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khuyenmai_Sanpham extends Model
{
    use HasFactory;
    protected $table = 'khuyenmai_sanpham'; 
    protected $fillable = ['kmsp_giaTri','kmsp_trangThai']; 
    protected $guarded = ['sp_ma','km_ma','m_ma']; //cot duoc bao ve
    protected $primaryKey = ['sp_ma','km_ma','m_ma'];
}
