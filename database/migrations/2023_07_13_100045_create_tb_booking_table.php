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
        Schema::create('tb_booking', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->string('booking_jenis_kost');
            $table->string('booking_nama_member');
            $table->string('booking_tanggal');
            $table->string('booking_waktu');
            $table->string('booking_jumlah_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_booking');
    }
};
