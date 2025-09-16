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
    Schema::create('categories', function (Blueprint $table) {
        $table->id(); // primary key, auto increment
        $table->string('name'); // required
        $table->text('description')->nullable(); // nullable
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('categories');
}

};
