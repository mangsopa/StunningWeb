<?php

use App\Models\Stunning;
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
        Schema::create('history_stunnings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->double('berat_badan');
            $table->double('tinggi_badan');
            $table->foreignIdFor(Stunning::class);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_stunnings');
    }
};
