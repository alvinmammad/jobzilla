<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fullname');
            $table->integer('age');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('qualification');
            $table->string('photo');
            $table->string('experience');
            $table->string('current_salary');
            $table->string('expected_salary');
            $table->string('country');
            $table->string('city');
            $table->string('description');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
