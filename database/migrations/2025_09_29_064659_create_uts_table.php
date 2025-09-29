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
    Schema::create('uts', function (Blueprint $table) {
        $table->id('uts_id'); // PK
        $table->string('nama_matkul');
        $table->integer('jumlah_sks');
        $table->string('keterangan')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uts');
    }
};
