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
        Schema::create('chirps', function (Blueprint $table) {
            $table->id(); //Creates an auto-incrementind ID
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete(); // Everytime a user is deleted, their chirps is deleted.
            $table->string('message', 255); // The chirp text (max 255 characters)
            $table->timestamps(); //Adds created_at and updated_at automatically
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chirps');
    }
};
