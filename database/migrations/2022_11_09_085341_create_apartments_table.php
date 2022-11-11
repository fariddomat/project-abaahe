<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->integer('type'); // 1 => front, 2 => back, 3 => appendix
            $table->integer('area');
            $table->integer('price');
            $table->integer('living_rooms');
            $table->integer('bed_rooms');
            $table->integer('dining_rooms');
            $table->integer('kitchens');
            $table->integer('servant_rooms');
            $table->integer('bathrooms');
            $table->integer('parking');
            $table->string('img');
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
        Schema::dropIfExists('apartments');
    }
}