<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motachitiet extends Model
{
    //
    protected $table='motachitiet';
    protected $fillable=['id','id_ma_sp','ten_sp','chip','ram','phan_cung','do_hoa','man_hinh','he_dieu_hanh','cam_truoc','cam_sau','cpu','bo_nho','hinh_sp1','hinh_sp2','hinhsp3'];
    public function sanpham(){
        return $this->hasOne('App\sanpham','id_ma_sp','id');
    } 
}
