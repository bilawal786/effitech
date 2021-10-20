<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('h1');
            $table->string('h2');
            $table->string('h3');
            $table->string('h4');
            $table->string('h5');

            $table->string('st1');
            $table->string('st2');
            $table->string('st3');
            $table->string('st4');
            $table->string('st5');
            $table->string('st6');

            $table->string('sd1');
            $table->string('sd2');
            $table->string('sd3');
            $table->string('sd4');
            $table->string('sd5');
            $table->string('sd6');

            $table->string('timage');
            $table->longText('review1');
            $table->longText('review2');
            $table->longText('review3');
            $table->longText('review4');
            $table->string('rg1');
            $table->string('rg2');
            $table->string('rg3');
            $table->string('rg4');

            $table->string('logo');
            $table->string('address');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');

            $table->longText('about');
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
        Schema::dropIfExists('contents');
    }
}
