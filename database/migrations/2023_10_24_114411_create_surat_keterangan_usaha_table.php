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
        Schema::create('surat_keterangan_usaha', function (Blueprint $table) {
            $table->id();
            $table->string("pekerjaan");
            $table->string("typeUsaha");
            $table->text("lokasiUsaha");
            $table->date("mulaiUsaha");
            $table->string("fotoUsaha");
	        $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("admins");
	        $table->unsignedBigInteger("status_id");
            $table->foreign("status_id")->references("id")->on("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_usaha');
    }
};
