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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 80);
            $table->text('description')->nullable();
            $table->string('thumb', 1000);
            $table->unsignedDecimal('price',4,2);
            $table->string('series', 80);
            $table->date('sale_date')->nullable();
            $table->string('type',50);
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
