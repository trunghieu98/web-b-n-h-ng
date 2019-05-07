<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hethongcuahang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hethongcuahang', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ten_chi_nhanh');
            $table->integer('sdt');
            $table->string('dia_chi');
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
        Schema::dropIfExists('hethongcuahang');
        //
    }
}
