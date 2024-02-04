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
            $table->string('service_name')->unique();
            $table->string('service_first_package_name')->default('Bronze');
            $table->string('service_first_package');
            $table->string('service_first_package_description');
            $table->string('service_second_package_name')->default('Gold');
            $table->string('service_second_package');
            $table->string('service_second_package_description');
            $table->string('service_third_package_name')->default('Diamond');
            $table->string('service_third_package');
            $table->string('service_third_package_description');
            $table->string('service_fourth_package_name')->default('Platinum');
            $table->string('service_fourth_package');
            $table->string('service_fourth_package_description');
            $table->string('service_link')->unique();
            $table->string('service_trainer');
            $table->string('service_image');
            $table->string('service_trainer_image');
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
