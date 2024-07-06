<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->string("num_plazas");
            $table->string("otros_datos");

            $table->unsignedBigInteger('traveler_id')->nullable();
            $table->unsignedBigInteger('destiny_id')->nullable();


            $table->foreign('traveler_id')
                    ->references('id')
                    ->on('travelers')
                    ->onDelete('set null');

            $table->foreign('destiny_id')
                    ->references('id')
                    ->on('destinies')
                    ->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
