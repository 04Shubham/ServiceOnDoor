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
        Schema::create('service_partners', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->text('address');
            $table->integer('experience_years');
            $table->string('id_proof')->nullable();
            // You can add individual columns for services instead of using JSON
            $table->boolean('appliances_service')->default(false);
            $table->boolean('cleaning_service')->default(false);
            $table->boolean('handyman_service')->default(false);
            $table->boolean('construction_service')->default(false);
            $table->boolean('travels_service')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_partners');
    }
};
