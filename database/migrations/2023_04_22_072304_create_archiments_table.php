<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archiments', function (Blueprint $table) {
            $table->id();
            $table->string('tamamlanan_proje');
            $table->string('devameden_proje');
            $table->string('müsteri_say');
            $table->string('calısanı_proje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archiments');
    }
}
