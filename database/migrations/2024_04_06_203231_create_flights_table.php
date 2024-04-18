<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_no');
            $table->enum('type', ['round_trip', 'one_way']);
            $table->enum('seat_type', ['economy', 'middle', 'business']);
            $table->integer('bags_count')->default(0);
            $table->string('from');
            $table->string('to');
            $table->timestamp('departure_date');
            $table->timestamp('return_date')->nullable();
            $table->integer('adult_count');
            $table->integer('child_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
