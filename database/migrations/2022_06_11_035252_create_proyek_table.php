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
        Schema::create('proyek', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->string('jenis_proyek');
            $table->text('alamat');
            $table->string('luas_tanah');
            $table->integer('panjang_rumah');
            $table->integer('lebar_rumah');
            $table->string('satuan');
            $table->string('status');
            $table->foreignId('pekerja_id')->nullable();
            $table->foreignId('client_id');

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
        Schema::dropIfExists('proyek');
    }
};
