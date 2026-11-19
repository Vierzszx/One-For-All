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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id('id_kegiatando');
            $table->foreignId('id_lembaga')->constrained('lembaga', 'id_lembaga');
            $table->string('judul');
            $table->string('kategori');
            $table->text('deskripsi');
            $table->dateTime('tanggal_pelaksanaan');
            $table->string('lokasi');
            $table->dateTime('batas_pendaftaran');
            $table->text('tautan_pendaftaran');
            $table->string('poster');
            $table->enum('status_pendaftaran', ['Draft', 'Terbit', 'Nonaktif'])
                    ->default('Draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
