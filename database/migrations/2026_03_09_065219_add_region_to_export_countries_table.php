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
        Schema::table('export_countries', function (Blueprint $table) {
             $table->string('region')->nullable()->after('iso_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('export_countries', function (Blueprint $table) {
             $table->dropColumn([
                'region'
            ]);

        });
    }
};
