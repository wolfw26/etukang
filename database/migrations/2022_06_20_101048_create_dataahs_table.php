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
            $table->string('rincian_pekerjaan');
            $table->integer('volume');
            $table->string('satuan');
            $table->string('harga_satuan');
            $table->string('total');
            $table->string('kategori');

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
