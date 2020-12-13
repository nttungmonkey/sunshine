<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitietdonhang extends Model
{
    use HasFactory;
    protected $table = 'chitietdonhang'; 
    protected $fillable = ['ctdh_soLuong','ctdh_donGia']; 
    protected $guarded = ['sp_ma','dh_ma','m_ma']; //cot duoc bao ve
    protected $primaryKey = ['sp_ma','dh_ma','m_ma'];
}
