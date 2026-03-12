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
        Schema::create('content_block_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('block_id')->constrained('content_blocks')->cascadeOnDelete();
            $table->string('field_key');
            $table->string('field_label')->nullable();
            $table->string('field_type')->default('text');

            $table->longText('field_value')->nullable();

            $table->integer('sort_order')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_block_items');
    }
};
