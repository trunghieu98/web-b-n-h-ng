<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathang', function (Blueprint $table) {
            $table->Increments('id');
            
         $table->integer('id_khach_hang')->unsigned();
         $table->foreign('id_khach_hang')->references('id')->on('thongtinkhachhang')->onDelete('cascade')->onUpdate('cascade');
           
            // $table->string('id_khach_hang');
            $table->date('ngay_dat');
            $table->integer('Tong_tien');
            $table->string('ghi_chu')->nullable();
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
        
        Schema::dropIfExists('dondathang');
    }
}
