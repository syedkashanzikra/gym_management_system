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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('member_email');
            $table->string('member_phone');
            $table->text('member_address');
            $table->text('member_facebook')->nullable();
            $table->text('member_instagram')->nullable();
        $table->text('member_twitter')->nullable();
        $table->integer('member_age');
        $table->string('member_cnic');
        $table->string('member_birthdate');
        $table->string('member_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
