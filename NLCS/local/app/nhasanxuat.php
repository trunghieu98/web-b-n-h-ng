<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhasanxuat extends Model
{
    protected $table="nhasanxuat";
    protected $fillable=['id','ten_nha_sx'];
     function sanpham(){
        return $this->hasMany('App\sanpham','id_ma_nsx','id');
    }
}
