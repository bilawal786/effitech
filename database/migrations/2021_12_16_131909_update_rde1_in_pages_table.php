<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRde1InPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->longText('h1')->change();
            $table->longText('h2')->change();
            $table->longText('d1')->change();
            $table->longText('d2')->change();

            $table->longText('de1')->change();
            $table->longText('title2')->change();
            $table->longText('de2')->change();

            $table->longText('rh1')->change();
            $table->longText('rh2')->change();
            $table->longText('rd1')->change();
            $table->longText('rd2')->change();

            $table->longText('rtitle1')->change();
            $table->longText('rde1')->change();

            $table->longText('rtitle2')->change();
            $table->longText('rde2')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            //
        });
    }
}
