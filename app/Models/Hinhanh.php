<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hinhanh extends Model
{
    use HasFactory;

    protected $table = 'hinhanh';
    protected $fillable = ['ha_ten'];   //Cho phep sua trong cac truong nay
    protected $guarded = ['sp_ma','ha_stt']; //cot duoc bao ve
    protected $primaryKey = ['sp_ma','ha_stt'];

}
