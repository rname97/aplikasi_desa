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
        Schema::create('surat_keterangan_usaha_failed', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("skUsaha_id");
            $table->foreign("skUsaha_id")->references("id")->on("surat_keterangan_usaha");
            $table->text("skUsahaDeskFailed");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_usaha_failed');
    }
};
