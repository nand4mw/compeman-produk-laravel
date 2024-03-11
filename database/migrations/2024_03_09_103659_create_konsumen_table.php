<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('konsumen', function (Blueprint $table) {
            $table->integer('id_konsumen')->autoIncrement();
            $table->string('token_konsumen', 255);
            $table->string('nama_konsumen');
            $table->string('alamat_konsumen');
            $table->string('nomer_telepon');
            $table->enum('status_pembelian', ['belum_dikirim', 'dikirim']);
            $table->date('tanggal_pembelian');
            $table->date('tanggal_pengirim');
            $table->text('deskripsi');
            $table->integer('id_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsumen');
    }
};
