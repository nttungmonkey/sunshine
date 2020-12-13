<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitietnhap extends Model
{
    use HasFactory;
    protected $table = 'chitietnhap'; 
    protected $fillable = ['ctn_soLuong','ctn_donGia']; 
    protected $guarded = ['sp_ma','pn_ma','m_ma']; //cot duoc bao ve
    protected $primaryKey = ['sp_ma','pn_ma','m_ma'];
}
