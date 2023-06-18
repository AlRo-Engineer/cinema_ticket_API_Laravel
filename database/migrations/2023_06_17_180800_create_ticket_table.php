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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_seance');
            $table->unsignedBigInteger('ID_status');
            $table->tinyInteger('row');
            $table->tinyInteger('number');
            $table->timestamps();

            $table->foreign('ID_seance')
                ->references('id')
                ->on('seance')
                ->onDelete('cascade');

            $table->foreign('ID_status')
                ->references('id')
                ->on('status')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
