<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
 
    protected $table ='sanpham';
    protected $fillable=['id','ten_sp','hinh_sp','gia','id_ma_loai','id_ma_nsx'];
    protected $primaryKey ="id";
     public function loaisanpham(){
        return $this->belongsTo('App\loaisanpham','id_ma_loai','id');
    }
    public function motachitiet(){
        return $this->belongsTo('App\motachitiet','id_ma_loai','id');
    }

}
