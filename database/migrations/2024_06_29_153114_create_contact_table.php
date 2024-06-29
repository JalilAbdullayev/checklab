<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('contact', function(Blueprint $table) {
            $table->id();
            $table->string('work_hours');
            $table->string('address');
            $table->string('phone', 14);
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('contact');
    }
};
