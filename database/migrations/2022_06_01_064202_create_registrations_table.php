<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_year_id');
            $table->string('semester');
            $table->string('enrollment_type');
            $table->foreignId('course_id');
            $table->string('year');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('phone_no');
            $table->string('email');
            $table->string('address');
            $table->string('last_school');
            $table->string('reg_ref');
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
        Schema::dropIfExists('registrations');
    }
}
