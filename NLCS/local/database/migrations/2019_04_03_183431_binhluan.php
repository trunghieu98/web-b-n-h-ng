<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Binhluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
        $table->Increments('id');
        $table->string('email');
         $table->string('ten');
         $table->string('noi_dung');
         $table->string('danh_gia');
         $table->integer('id_ma_sp')->unsigned();
         $table->foreign('id_ma_sp')->references('id')->on('sanpham')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('binhluan');
    }
}
