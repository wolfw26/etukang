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
        Schema::create('alatins', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('keterangan');
            $table->date('tanggal');
            $table->string('merk')->nullable();
            $table->string('fungsi')->nullable();
            $table->integer('harga');
            $table->string('tempat');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->string('status');
            $table->integer('total_harga');
            $table->foreignId('alatrusak_id')->nullable();
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
        Schema::dropIfExists('alatins');
    }
};
