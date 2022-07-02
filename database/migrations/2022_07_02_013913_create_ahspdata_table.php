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
        Schema::create('ahspdata', function (Blueprint $table) {
            $table->id();
            $table->string('rincian');
            $table->float('volume', 8, 3);
            $table->string('satuan');
            $table->integer('harga_satuan');
            $table->integer('total');
            $table->string('kategori');
            $table->foreignId('ahs_id');
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
        Schema::dropIfExists('ahspdata');
    }
};
