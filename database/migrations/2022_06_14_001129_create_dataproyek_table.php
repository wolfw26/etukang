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
        Schema::create('dataproyek', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->string('nama_tukang');
            $table->String('alamat');
            $table->string('panjang_Tanah');
            $table->string('lebar_Tanah');
            $table->string('tipe_rumah');
            $table->string('jumlah_Kamar');
            $table->string('jumlah_Kamar_Mandi');
            $table->string('status');
            $table->string('doc');
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
        Schema::dropIfExists('dataproyek');
    }
};
