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
        Schema::create('surat_pengaduan_masyarakat', function (Blueprint $table) {
            $table->id();
            $table->text("keteranganSPM");
            $table->string("fotoBuktiSPM");
            $table->string("status");
            $table->text("statusDesk");
            $table->string("user");
            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("admins");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_pengaduan_masyarakat');
    }
};
