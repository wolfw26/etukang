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
            $table->string('panjang Tanah');
            $table->string('lebar_Tanah');
            $table->string('Jumlah_Kamar');
            $table->string('Jumlah_Kamar_Mandi');
            $table->foreign('proyek_id')->references('id')->on('proyek');
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
