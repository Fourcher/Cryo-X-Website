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
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('basket_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('delivery_address_id')->constrained('addresses')->onDelete('cascade');
            $table->foreignId('billing_address_id')->constrained('addresses')->onDelete('cascade');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('postage', 10, 2);
            $table->foreignId('discount_code_id')->nullable()->constrained()->onDelete('set null');
            $table->decimal('discount', 10, 2);
            $table->decimal('total', 10, 2);
            $table->string('status');
            $table->text('customer_notes')->nullable();
            $table->text('admin_notes')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->text('shipping_reference')->nullable();
            $table->text('shipping_information')->nullable();
            $table->text('shipping_status')->nullable();
            $table->string('phone_number');
            $table->timestamps();
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
