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
        Schema::table('content_blocks', function (Blueprint $table) {
            $table->string('block_type')->default('single')->after('key');
            $table->integer('sort_order')->default(0)->after('block_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('content_blocks', function (Blueprint $table) {
            $table->dropColumn([
                'block_type',
                'sort_order'
            ]);
        });
    }
};
