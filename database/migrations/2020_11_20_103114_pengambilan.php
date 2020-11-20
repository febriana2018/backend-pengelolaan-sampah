<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengambilan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengambilan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_warga')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->datetime('waktu_pengambilan');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_warga')->references('id')->on('warga')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengambilan');
    }
}
