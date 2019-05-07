<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thongtinkhachhang extends Model
{
    protected $table="thongtinkhachhang";
    protected $fillable=['id','email','sdt','diachi'];
     
}
