<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('ratings', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('rating');
            $table->text('comment')->nullable();
            $table->morphs('rateable');
            $table->bigInteger('user_id')->unsigned();
            $table->index('rateable_id');
            $table->index('rateable_type');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::drop('ratings');
    }
}
