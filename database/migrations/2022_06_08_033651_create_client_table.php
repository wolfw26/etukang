<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->date('tgl_lahir')->nullable();
            $table->string('tempat_lahir');
            $table->text('alamat');
            $table->string('jk');
            $table->string('no_ktp');
            $table->string('foto_ktp')->default("client-img/default.png");
            $table->string('no_telp');
            // $table->string('no_rek');
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
