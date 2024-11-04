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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Reference to users table
            $table->string('service');
            $table->string('product');
            $table->string('color');
            $table->string('theme')->nullable();
            $table->string('event_type');
            $table->date('date');
            $table->text('message')->nullable();
            $table->string('status')->default('pending');
            $table->enum('delivery_option', ['Pickup', 'Deliver']);
            $table->text('delivery_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
