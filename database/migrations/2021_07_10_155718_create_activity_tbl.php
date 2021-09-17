<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('country');
        $table->string('image');
        $table->timestamps();
        });

        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('category')->nullable();
            $table->text('program')->nullable();
            $table->text('description1')->nullable();
            $table->text('description2')->nullable();
            $table->text('price')->nullable();
            $table->date('datedebut')->nullable();
            $table->date('datefin')->nullable();
            $table->text('image')->nullable();
            $table->text('adresse')->nullable();


            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');


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
        Schema::dropIfExists('activities');
        Schema::dropIfExists('cities');
    }

}
