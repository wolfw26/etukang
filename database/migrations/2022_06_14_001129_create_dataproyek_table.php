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
            $table->String('nama_data');
            $table->integer('jumlah');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->String('satuan');
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
