<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keg_mandiris', function (Blueprint $table) {
            $table->string('id');
            $table->string('nim');
            $table->string('nama');
            $table->enum('kategori_kegiatan',['provinsi','wilayah','nasional','internasional']);
            $table->string('capaian_prestasi')->nullable();
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');
            $table->string('sertifikat')->nullable();
            $table->string('url_kegiatan');
            $table->string('foto_penghargaan')->nullable();
            $table->string('surat_tugas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keg_mandiris');
    }
};
