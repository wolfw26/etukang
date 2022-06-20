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
        Schema::create('dataahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_ahs');
            $table->string('nama_ahs');
            $table->string('rincian_pekerjaan');
            $table->int('volume');
            $table->string('satuan');
            $table->int('harga_satuan');
            $table->int('jumlah');
            $table->foreignId('rab_id');
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
        Schema::dropIfExists('dataahs');
    }
};
