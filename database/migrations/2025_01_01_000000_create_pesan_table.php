<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('kelas_jurusan');
            $table->text('kesan_pesan');
            $table->text('saran')->nullable();
            $table->text('kata_untuk_vilova')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesan');
    }
};
