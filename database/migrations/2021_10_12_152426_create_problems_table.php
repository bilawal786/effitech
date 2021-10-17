<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->longText('photos')->nullable();
            $table->integer('site');
            $table->longText('description')->nullable();
            $table->integer('quote_status')->default(0); // customer quote accept or reject first
            $table->string('price')->nullable();
            $table->string('service_date')->nullable();

            $table->integer('contractor_id')->nullable();
            $table->integer('supervisor_id')->nullable();
            $table->integer('owner_id')->nullable();

            $table->integer('client_payment')->default(0); // customer pay or not

            $table->integer('contractor_status')->default(0); // contractor validate done or not
            $table->integer('supervisor_status')->default(0); // supervisor validate done or not
            $table->integer('owner_status')->default(0); // owner validate done or not

            $table->integer('contractor_payment')->default(0); // contractor payment against this problem done or not
            $table->integer('supervisor_payment')->default(0); // supervisor payment against this problem done or not
            $table->integer('owner_payment')->default(0); // owner payment against this problem done or not

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
        Schema::dropIfExists('problems');
    }
}
