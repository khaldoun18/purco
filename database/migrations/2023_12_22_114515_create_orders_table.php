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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('desired_date');
            $table->text('remarks')->nullable();
            $table->boolean('packaging_return')->default(false);
            $table->text('delivery_address');
            $table->string('address_number');
            $table->string('postcode');
            $table->string('city');
            $table->string('order_number');
            $table->enum('status',['placed','delivered','transport']);
            $table->enum('payment',['success','waiting','dismissed']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
