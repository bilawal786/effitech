<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
//            construction page
            $table->string('h1');
            $table->string('h2');
            $table->string('d1');
            $table->string('d2');

            $table->string('video');
            $table->string('vimage');

            $table->string('image1');
            $table->string('title1');
            $table->string('de1');
            $table->string('image2');
            $table->string('title2');
            $table->string('de2');

//            renovation page
            $table->string('rh1');
            $table->string('rh2');
            $table->string('rd1');
            $table->string('rd2');

            $table->string('rvideo');
            $table->string('rvimage');

            $table->string('rimage1');
            $table->string('rtitle1');
            $table->string('rde1');
            $table->string('rimage2');
            $table->string('rtitle2');
            $table->string('rde2');

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
        Schema::dropIfExists('pages');
    }
}
