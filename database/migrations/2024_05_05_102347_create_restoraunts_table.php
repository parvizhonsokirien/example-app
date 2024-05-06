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
        Schema::create('restoraunts', function (Blueprint $table) {
            if (!Schema::hasTable('restoraunts')) {
                $table->id();
                $table->string('name');
                $table->string('address');
                $table->string('phone');
                $table->string('email');
                $table->foreignId('rest_category_id')->constrained();
                $table->timestamps();
            }
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restoraunts');
    }
};
