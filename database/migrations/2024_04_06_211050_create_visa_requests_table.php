<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_requests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('country_interest');
            $table->enum('employment_status', ['employee', 'self_employed'])->nullable();
            $table->string('current_employer')->nullable();
            $table->string('occupation');
            $table->string('monthly_income');
            $table->integer('age');
            $table->string('trip_purpose');
            $table->boolean('has_travel_history')->default(false);
            $table->string('travel_history');
            $table->boolean('is_married');
            $table->boolean('has_children');
            $table->boolean('has_visa_denial');
            $table->text('visa_denial_reason')->nullable();
            $table->text('extra_information')->nullable();
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
        Schema::dropIfExists('visa_requests');
    }
};
