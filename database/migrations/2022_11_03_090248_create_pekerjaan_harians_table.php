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
        Schema::create('pekerjaan_harians', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->text('deskripsi');
            $table->string('image')->nullable();
            $table->foreignId('proyek_id')->nullable();
            $table->foreignId('pekerja_id')->nullable();
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
        Schema::dropIfExists('pekerjaan_harians');
    }
};
