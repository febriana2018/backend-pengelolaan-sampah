<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RetribusiWarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retribusi_warga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kolektor');
            $table->integer('jumlah_tagihan');
            $table->string('bulan_tagihan');
            $table->string('alamat');
            $table->enum('keterangan', ['sudah_bayar', 'belum_bayar']);
            $table->datetime('tanggal_transaksi');
            $table->unsignedBigInteger('id_warga')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
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
        Schema::dropIfExists('retribusi_warga');
    }
}
