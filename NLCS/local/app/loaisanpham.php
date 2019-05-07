<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    protected $table="loaisanpham";
    protected $fillable=['id','ten_loai'];
    protected $primaryKey="id";
    public function sp()
    {
        return $this->hasMany('App\sanpham', 'id_ma_loai','id');
    }
}
