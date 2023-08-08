<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenelayarlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genelayarlars', function (Blueprint $table) {
            $table->id();
            $table->string('site_logo');
            $table->string('sosyal_facebook');
            $table->string('sosyal_twitter');
            $table->string('sosyal_instagram');
            $table->string('sosyal_gmail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genelayarlars');
    }
}
