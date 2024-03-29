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
        Schema::create('alats', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->text('fungsi');
            $table->string('Merk')->nullable();
            $table->string('kepemilikan');
            $table->string('satuan');
            $table->integer('harga_satuan');
            $table->integer('stok')->nullable();
            $table->integer('sewa_id')->nullable();
            $table->integer('masuk_id')->nullable();
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
        Schema::dropIfExists('alats');
    }
};
