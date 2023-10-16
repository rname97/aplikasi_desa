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
        Schema::create('surat_pengantar_ktp_failed', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("spktp_id");
            $table->foreign("spktp_id")->references("id")->on("surat_pengantar_ktp");
            $table->text("spktpDesk");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_pengantar_ktp_failed');
    }
};
