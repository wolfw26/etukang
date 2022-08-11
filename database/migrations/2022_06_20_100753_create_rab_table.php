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
        Schema::create('rab', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('nama_rab');
            $table->string('kode_rab');
            $table->integer('jumlah')->nullable();
            $table->string('satuan')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tangal_selesai')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('proyek_id');
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
        Schema::dropIfExists('rab');
    }
};
