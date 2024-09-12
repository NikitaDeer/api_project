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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('last_name', 40);
            $table->string('name', 40);
            $table->string('middle_name', 40)->nullable();
            $table->string('email', 80)->unique();
            $table->string('phone', 20)->nullable();
            $table->enum('action', ['created', 'updated', 'deleted', 'restored']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
