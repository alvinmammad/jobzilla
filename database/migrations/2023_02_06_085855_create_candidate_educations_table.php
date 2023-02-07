<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_educations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('education_type');
            $table->string('education_institution');
            $table->date('education_from');
            $table->date('education_to');
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
        Schema::dropIfExists('candidate_educations');
    }
}
