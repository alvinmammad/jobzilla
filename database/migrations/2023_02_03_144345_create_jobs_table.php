<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('job_title');
            $table->integer('salary_from');
            $table->integer('salary_to');
            $table->boolean('salary_is_monthly')->nullable()->default(false);
            $table->string('qualification');
            $table->string('gender');
            $table->string('country');
            $table->string('city');
            $table->string('location');
            $table->string('email');
            $table->string('website')->nullable();
            $table->text('description')->nullable()->default('text');
            $table->date('start_date')->nullable()->default(new DateTime());
            $table->date('end_date')->nullable()->default(new DateTime());
            $table->string('cover_photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
