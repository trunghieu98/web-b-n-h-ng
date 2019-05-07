<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
        $table->Increments('id');
        $table->string('ten_sp');
        $table->string('hinh_sp');
        $table->integer('gia');
        $table->integer('bao_hanh');
        $table->integer('id_ma_loai')->unsigned();
        $table->foreign('id_ma_loai')->references('id')->on('loaisanpham')->onDelete('cascade')->onUpdate('cascade');
        $table->integer('id_ma_nsx')->unsigned();
        $table->foreign('id_ma_nsx')->references('id')->on('nhasanxuat')->onDelete('cascade')->onUpdate('cascade');
        $table->integer('mota');
        $table->integer('khuyen_mai');
        $table->timestamps();
     });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');    }
}
