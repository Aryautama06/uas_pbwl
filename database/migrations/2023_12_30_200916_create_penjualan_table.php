<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->unsignedBigInteger('donat_id')->nullable();
            $table->unsignedBigInteger('pel_id')->nullable();
            $table->timestamps();
            $table->foreign('donat_id')->references('id')->on('donat');
            $table->foreign('pel_id')->references('id')->on('pelanggan');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
