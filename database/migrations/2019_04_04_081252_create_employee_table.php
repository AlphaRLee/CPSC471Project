<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->string('ssn');
            $table->string('first_name');
            $table->string('last_name');
            // $table->string('email'); // Already controlled by the User table
            $table->date('dob');
            $table->string('gender', 10);
            $table->string('address');
            $table->string('postal_code', 7);
            $table->string('city');
            $table->string('province');
            $table->string('country');

            $table->bigInteger('department_id')->foreign('department_id')->references('id')->on('department');

            $table->primary('ssn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
