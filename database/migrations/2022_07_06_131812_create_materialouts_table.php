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
        Schema::create('materialouts', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('kode_material');
            $table->string('nama_material');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->integer('stok_awal')->nullable();
            $table->integer('harga_satuan');
            $table->integer('total')->nullable();
            $table->foreignId('material_id');
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
        Schema::dropIfExists('materialouts');
    }
};
