<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dondathang extends Model
{
    protected $table="dondathang";
    protected $fillable=['id','id_khach_hang','ngay_dat','Tong_tien','ghi_chu'];
     
}
