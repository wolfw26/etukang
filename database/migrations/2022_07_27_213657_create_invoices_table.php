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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('deskripsi');
            $table->date('tanggal_invoice');
            $table->date('tanggal_japo');
            $table->string('dari');
            $table->string('image_invoice')->nullable();
            $table->integer('total')->nullable();
            $table->integer('dibayar')->nullable();
            $table->integer('sisa')->nullable();
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
        Schema::dropIfExists('invoices');
    }
};
