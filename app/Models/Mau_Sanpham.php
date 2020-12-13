<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mau_Sanpham extends Model
{
    use HasFactory;
    protected $table = 'mau_sanpham';
    protected $fillable = ['msp_soluong'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['sp_ma','m_ma']; //cot duoc bao ve
    protected $primaryKey = ['sp_ma','m_ma'];
}
