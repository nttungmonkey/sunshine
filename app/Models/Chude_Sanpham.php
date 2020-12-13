<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chude_Sanpham extends Model
{
    use HasFactory;
    protected $table = 'chude_sanpham'; 
    protected $guarded = ['sp_ma','cd_ma']; //cot duoc bao ve
    protected $primaryKey = ['sp_ma','cd_ma'];
}
