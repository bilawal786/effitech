<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_id');
            $table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');
            $table->integer('contractor_id');
            $table->integer('supervisor_id');
            $table->integer('contractor_status')->default(0); // contractor validate done or not
            $table->integer('supervisor_status')->default(0); // supervisor validate done or not
            $table->string('title');
            $table->longtext('details');
            $table->longtext('gallery');
            $table->string('start_date');
            $table->string('end_date');
            $table->integer('work_status')->default('0');

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
        Schema::dropIfExists('steps');
    }
}
