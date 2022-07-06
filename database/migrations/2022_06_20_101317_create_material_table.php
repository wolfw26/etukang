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
        Schema::create('material', function (Blueprint $table) {
            $table->id();
            $table->string('kode_material');
            $table->string('nama_material');
            $table->integer('stok')->nullable();
            $table->string('satuan');
            $table->integer('harga_satuan');
            $table->integer('masuk')->nullable();
            $table->integer('keluar')->nullable();
            $table->integer('stok_akhir')->nullable();
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
        Schema::dropIfExists('material');
    }
};
