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
        Schema::create('seance', function (Blueprint $table) {$table->id();
            $table->unsignedBigInteger('ID_hall');
            $table->unsignedBigInteger('ID_movie');
            $table->dateTime('datetime');
            $table->float('price', 2);
            $table->timestamps();

            $table->foreign('ID_hall')
                ->references('id')
                ->on('hall')
                ->onDelete('cascade');

            $table->foreign('ID_movie')
                ->references('id')
                ->on('movies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seance');
    }
};
