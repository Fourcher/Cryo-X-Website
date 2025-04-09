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
        // Schema::create('baskets', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
        //     $table->decimal('subtotal', 10, 2);
        //     $table->decimal('postage', 10, 2);
        //     $table->foreignId('discount_code_id')->nullable()->constrained()->onDelete('set null');
        //     $table->decimal('discount', 10, 2);
        //     $table->decimal('total', 10, 2);
        //     $table->string('status');
        //     $table->timestamps();
        // });

        Schema::table('baskets', function (Blueprint $table) {
            $table->string('session_id')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets');
    }
};
