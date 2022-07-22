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
        Schema::create('ahsp', function (Blueprint $table) {
            $table->id();
            $table->string('kode_ahs')->nullable();
            $table->string('nama_ahs')->nullable();
            $table->string('kategori')->nullable();
            $table->string('satuan')->nullable();
            $table->integer('total_upah')->nullable();
            $table->integer('total_bahan')->nullable();
            $table->integer('total_alat')->nullable();
            $table->integer('total')->nullable();
            $table->integer('profit')->nullable();
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
        Schema::dropIfExists('ahsp');
    }
};
