<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietdonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('id_don_hang')->u $table->foreign('id_ma_nsx')->references('id')->on('nhasanxuat')->onDelete('cascade')->onUpdate('cascade');
            // nsigned();

            $table->integer('id_don_hang')->unsigned();
             $table->foreign('id_don_hang')->references('id')->on('dondathang')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('id_don_hang');
                   $table->integer('id_sp')->unsigned();
            $table->foreign('id_sp')->references('id')->on('sanpham')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('id_sp');
            $table->integer('soluong');
            $table->integer('gia_tien');
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
        
        Schema::dropIfExists('chitietdonhang');
    }
}
