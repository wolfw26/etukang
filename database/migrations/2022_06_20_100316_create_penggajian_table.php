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
        Schema::create('penggajian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggalAwal');
            $table->date('tanggalAkhir');
            $table->string('nama_pekerja');
            $table->string('jabatan');
            $table->integer('gapok');
            $table->integer('lembur')->nullable();
            $table->integer('upah_lembur')->nullable();
            $table->integer('transport');
            $table->integer('makan');
            $table->integer('bonus');
            $table->integer('potongan')->nullable();
            $table->integer('total');
            $table->integer('dibayar')->nullable();
            $table->integer('sisa')->nullable();
            $table->foreignId('pekerja_id');
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
        Schema::dropIfExists('penggajian');
    }
};
