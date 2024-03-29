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
        Schema::create('alatrusaks', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->string('nama');
            $table->string('id_penambah')->nullable();
            $table->string('status')->nullable();
            $table->date('tanggal');
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
        Schema::dropIfExists('alatrusaks');
    }
};
