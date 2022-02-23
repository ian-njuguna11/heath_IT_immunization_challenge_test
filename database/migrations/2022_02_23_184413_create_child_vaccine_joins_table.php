<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_vaccine_joins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('child_id')->index();
            $table->unsignedBigInteger('vaccine_id')->index();
            $table->timestamps();

            $table->foreign('child_id')->references('id')->on('childrens')->onDelete('cascade');
            $table->foreign('vaccine_id')->references('id')->on('vaccines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_vaccine_joins');
    }
};
