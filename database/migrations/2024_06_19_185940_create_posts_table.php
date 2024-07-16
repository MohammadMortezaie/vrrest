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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('language')->comment("1-en 2-zh");
            $table->string('slug');
            $table->unsignedinteger('post_category_id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('keywords');
            $table->text('content');
            $table->unsignedinteger('user_id');
            $table->string("image")->nullable();
            $table->boolean("is_active")->default(1)->comment('0-no 1-yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
