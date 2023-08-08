<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proje_kat_id')->unsigned();
            $table->string('proje_baslik');
            $table->longText('proje_icerik');
            $table->string('proje_resim1');
            $table->string('proje_resim2')->nullable();
            $table->string('proje_resim3')->nullable();
            $table->string('proje_adres');
            $table->string('proje_selflink');
            $table->timestamps();
            $table->foreign('proje_kat_id')->references('id')->on('projekategoris')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projes');
    }
}
