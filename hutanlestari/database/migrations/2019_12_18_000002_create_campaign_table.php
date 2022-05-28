<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign', function (Blueprint $table) {
            $table->id();
            $table->string('nama_campaign')->nullable();
            $table->string('deskripsi_campaign');
            $table->char('volunteer_check');
            $table->char('donation_check');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('target');
            $table->integer('donasi_terkini');
            $table->char('verifikasi_check');
            $table->char('img');
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
        Schema::dropIfExists('campaign');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
    }
};
