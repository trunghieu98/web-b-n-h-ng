<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Motachitiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motachitiet', function (Blueprint $table) {
        $table->Increments('id');
        $table->string('ten_sp');
        $table->string('ram')->nullable();
        $table->string('bo_nho')->nullable();
        $table->string('do_hoa')->nullable();
        $table->string('man_hinh')->nullable();
        $table->string('he_dieu_hanh')->nullable();
        $table->string('pin')->nullable();
        $table->string('cam_truoc')->nullable();
        $table->string('cam_sau')->nullable();
        $table->string('cpu')->nullable();
        $table->string('kich_thuoc')->nullable();
        $table->string('ban_phim')->nullable();
        $table->string('hinh_sp1')->nullable();
        $table->string('hinh_sp2')->nullable();
        $table->string('hinh_sp3')->nullable();
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
        Schema::dropIfExists('motachitiet');
    }
}
