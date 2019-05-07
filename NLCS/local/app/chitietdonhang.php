<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    protected $table="chitietdonhang";
    protected $fillable=['id','id_don_hang','id_sp','so_luong','gia_tien'];
     
}
