<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    protected $table='binhluan';
    protected $fillable=['id','ma_sp','email','ten','noidung','danhgia'];
}
