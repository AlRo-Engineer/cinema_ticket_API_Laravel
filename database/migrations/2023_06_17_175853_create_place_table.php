<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('place', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_hall');
            $table->tinyInteger('row');
            $table->tinyInteger('number');
            $table->timestamps();

            $table->foreign('ID_hall')
                ->references('id')
                ->on('hall')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place');
    }
};
