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
        Schema::create('data_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('deskipsi');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->integer('total');
            $table->foreignId('invoices_id')->nullable();
            $table->foreignId('alatsewas_id')->nullable();
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
        Schema::dropIfExists('data_invoices');
    }
};
