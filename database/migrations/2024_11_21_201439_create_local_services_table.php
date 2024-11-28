<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('local_services', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_zh');
            $table->string('subtitle_en');
            $table->string('subtitle_zh');
            $table->text('desc_en');
            $table->text('desc_zh');
            $table->string('image')->nullable();
            $table->string('city');
            $table->string('slug');
            $table->string('street_address');
            $table->string('address_locality');
            $table->string('address_region');
            $table->string('postal_code');
            $table->string('area_served');
            $table->string('latitude');
            $table->string('longitude');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_services');
    }
};
