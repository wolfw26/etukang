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
        Schema::create('dataproyek', function (Blueprint $table) {
            $table->id();
            $table->String('keterangan');
            $table->string('deskripsi')->nullable();
            $table->string('lain1')->nullable();
            $table->string('lain2')->nullable();
            $table->foreignId('client_id')->nullable();
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
        Schema::dropIfExists('dataproyek');
    }
};
