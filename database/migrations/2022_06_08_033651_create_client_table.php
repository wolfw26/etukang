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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->text('alamat');
            $table->string('jk');
            $table->integer('no_ktp');
            $table->string('foto_ktp');
            $table->integer('no_telp');
            $table->integer('no_rek');
            $table->foreignId('users_id');
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
        Schema::dropIfExists('client');
    }
};
