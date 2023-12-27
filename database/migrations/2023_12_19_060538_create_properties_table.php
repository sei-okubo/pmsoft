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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('property_name');
            $table->integer('capital');
            $table->integer('expense');
            $table->integer('loan')->default(0);
            $table->integer('loan_period')->default(0);
            $table->integer('interest')->default(0);
            $table->integer('rent');
            $table->integer('fixed_expenditure')->default(0);
            $table->integer('repay')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
