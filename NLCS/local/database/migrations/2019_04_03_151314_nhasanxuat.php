
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nhasanxuat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhasanxuat', function (Blueprint $table) {
        $table->Increments('id');
        $table->string('ten_nha_sx');
        $table->string('hinhanh');
        $table->integer('loai')->nullable();
        $table->integer('dt')->nullable();
        $table->integer('mtb')->nullable();
        $table->integer('khac')->nullable();
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
        Schema::dropIfExists('nhasanxuat');
    }
}
