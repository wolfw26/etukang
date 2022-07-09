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
            $table->string('deskripsi');
            $table->string('tempat_sewa');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('harga');
            $table->string('satuan');
            $table->integer('harga_total');
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
