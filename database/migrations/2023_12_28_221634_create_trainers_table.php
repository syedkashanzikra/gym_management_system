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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('trainer_name');
                $table->string('trainer_email');
                $table->string('trainer_phone');
                $table->text('trainer_address');
                $table->text('trainer_facebook');
                $table->text('trainer_instagram');
            $table->text('trainer_twitter');
            $table->integer('trainer_age');
            $table->string('trainer_cnic');
            $table->string('trainer_birthdate');
            $table->string('trainer_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
