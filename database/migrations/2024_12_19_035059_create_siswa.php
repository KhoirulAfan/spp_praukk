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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->char('nisn');
            $table->char('nis');
            $table->string('nama');
            $table->text('alamat');
            $table->integer('no_telp');
            // $table->foreignId('id_kelas')->constrained()->references('id')->on('kelas')->onDelete('cascade');
            // $table->unsignedBigInteger('id_kelas');
            // $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            // $table->foreignId('id_kelas')->constrained('kelas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
