<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('religions', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Example column
        $table->unsignedBigInteger('school_id'); // Reference to the schools table
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('religion');
    }
};
