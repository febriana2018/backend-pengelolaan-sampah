<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Warga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NIK');
            $table->string('nama');
            $table->string('nama_cp');
            $table->string('no_telp');
            $table->string('no_telp_cp');
            $table->string('email');
            $table->string('password');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('detail_alamat');
            $table->string('lokasi');
            $table->string('desa');
            $table->string('dukuh');
            $table->integer('rt');
            $table->integer('rw');
            $table->unsignedBigInteger('id_kategori_sampah')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('id_kategori_sampah')->references('id')->on('kategori_sampah')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warga');
    }
}
