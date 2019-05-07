<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hethongcuahang extends Model
{
    protected $table="hethongcuahang";
    protected $fillable=['id','ten_chi_nhanh','sdt','dia_chi'];
    protected $primaryKey="id";
}