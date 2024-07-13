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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedinteger('post_id');
            $table->unsignedinteger('comment_id')->nullable();
            $table->unsignedinteger('user_id')->nullable();
            $table->string("name");
            $table->string("email");
            $table->string("comment");
            $table->boolean("is_active")->default(1)->comment('0-no 1-yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
