<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    protected $table="khuyenmai";
    protected $fillable=['id','ten_km','phantram'];
    protected $primaryKey="id";
}