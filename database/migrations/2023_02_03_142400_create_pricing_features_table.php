<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_features', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('feature');
            $table->unsignedBigInteger('pricing_id');
            $table->foreign('pricing_id')->references('id')->on('pricings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricing_features');
    }
}
