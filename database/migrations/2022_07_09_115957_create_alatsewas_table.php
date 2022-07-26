<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alatsewas', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('deskripsi');
            $table->string('tempat_sewa');
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->string('merk')->nullable();
            $table->string('fungsi')->nullable();
            $table->integer('harga');
            $table->integer('jumlah_hari')->nullable();
            $table->integer('jumlah');
            $table->string('satuan');
            $table->integer('harga_total');
            $table->integer('dibayar');
            $table->integer('sisa')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('alats_id')->nullable();
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
        Schema::dropIfExists('alatsewas');
    }
};
