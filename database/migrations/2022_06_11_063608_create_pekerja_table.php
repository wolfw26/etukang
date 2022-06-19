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
        Schema::create('pekerja', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('alamat');
            $table->string('tlahir');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('riwayat');
            $table->text('Lain');
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
        Schema::dropIfExists('pekerja');
    }
};
