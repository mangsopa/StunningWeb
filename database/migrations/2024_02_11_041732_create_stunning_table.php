<?php

use App\Models\Bayi;
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
        Schema::create('stunning', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']); // Tipe ENUM di sini
            $table->date('tanggal_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->double('berat_badan');
            $table->double('tinggi_badan');
            $table->enum('asupan_gizi', ['Terpenuhi', 'Tidak-Terpenuhi']); // Tipe ENUM di sini
            $table->boolean('status_kesehatan')->default(true);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stunning');
    }
};
