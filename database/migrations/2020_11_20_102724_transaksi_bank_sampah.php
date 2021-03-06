<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiBankSampah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_bank_sampah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_bank_sampah')->nullable();
            $table->datetime('tanggal_transaksi');
            $table->string('keterangan');
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->unsignedBigInteger('id_konversi')->nullable();
            $table->integer('berat');
            $table->integer('harga_total');
            $table->string('unduh_transaksi');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_bank_sampah')->references('id')->on('bank_sampah')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade');
            $table->foreign('id_konversi')->references('id')->on('konversi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_bank_sampah');
    }
}
