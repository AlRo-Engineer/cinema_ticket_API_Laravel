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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_genre');
            $table->unsignedBigInteger('ID_directed');
            $table->string('name');
            $table->tinyInteger('census');
            $table->string('desc');
            $table->timestamps();

            $table->foreign('ID_genre')
                ->references('id')
                ->on('genre')
                ->onDelete('cascade');

            $table->foreign('ID_directed')
                ->references('id')
                ->on('directed')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_movies');
    }
};
