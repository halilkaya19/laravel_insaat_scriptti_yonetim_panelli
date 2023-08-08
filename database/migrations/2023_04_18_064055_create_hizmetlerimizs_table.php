<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHizmetlerimizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hizmetlerimizs', function (Blueprint $table) {
            $table->id();
            $table->string('hizmet_baslik');
            $table->longText('hizmet_icerik');
            $table->string('hizmet_resim');
            $table->string('hizmet_selflink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hizmetlerimizs');
    }
}
