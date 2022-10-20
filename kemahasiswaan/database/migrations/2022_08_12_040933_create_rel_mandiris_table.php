<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Nette\Utils\Strings;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_mandiris', function (Blueprint $table) {
            $table->id();
            $table->string('capaian_prestasi');
            $table->string('sertifikat');
            $table->string('foto_penghargaan');
            $table->string('surat_tugas');
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
        Schema::dropIfExists('rel_mandiris');
    }
};
