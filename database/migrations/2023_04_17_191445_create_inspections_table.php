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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->unsignedBigInteger('yard_id')->nullable();
            $table->foreign('yard_id')->references('id')->on('yards')->onDelete('SET NULL');
            $table->unsignedBigInteger('track_id')->nullable();
            $table->foreign('track_id')->references('id')->on('tracks')->onDelete('SET NULL');
            $table->unsignedBigInteger('tracksection_id')->nullable();
            $table->foreign('tracksection_id')->references('id')->on('track_sections')->onDelete('SET NULL');
            
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
        Schema::dropIfExists('inspection');
    }
};
