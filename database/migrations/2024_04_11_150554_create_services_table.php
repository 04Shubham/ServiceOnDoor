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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->mediumText('description');
            $table->text('long_description');
            $table->string('vedio')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('price')->default(0);
            $table->softDeletes('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
