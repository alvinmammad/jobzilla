<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_experiences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('from_date');
            $table->date('to_date');
            $table->string('company_name');
            $table->string('position');
            $table->boolean('still_working')->nullable()->default(false);
            $table->text('job_description');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')
            ->references('id')
            ->on('candidates')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_experiences');
    }
}
