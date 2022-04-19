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
        Schema::create('informasifauna', function (Blueprint $table) {
            $table->id();
            $table->text('nama_fauna');
            $table->integer('persen_populasi');
            $table->text('gambar');
            $table->text('deskripsi');
            $table->text('judul_informasi');
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
        Schema::dropIfExists('informasifauna');
    }
};
