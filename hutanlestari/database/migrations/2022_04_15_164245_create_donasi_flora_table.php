<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasiFloraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi_flora', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->char('nama_pengirim');
            $table->char('email');
            $table->char('tipe_donasi');
            $table->char('nama_flora');
            $table->char('tipe_pengiriman');
            $table->date('tanggal_pengiriman');
            $table->char('img');
            $table->char('verifikasi_check');
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('donasi_flora');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
