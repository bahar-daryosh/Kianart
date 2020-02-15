<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_samples', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('image');
            $table->text('caption');
            $table->integer('category_id');
            $table->integer('skill_id');
            $table->string('customerName');
            $table->string('workConspectus');
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
        Schema::dropIfExists('work_samples');
    }
}
