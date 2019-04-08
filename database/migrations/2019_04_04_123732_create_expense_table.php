<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('amount')->nullable();
            $table->string('photo'); // File path to the photo taken
            $table->string('status');
            $table->timestamps(); // Adds nullable 'created_at' and 'updated_at' fields

            $table->string('employee_ssn')->foreign('employee_ssn')->references('ssn')->on('employee');
            $table->bigInteger('code_id')->foreign('code_id')->references('id')->on('expense_code');

            $table->string('secretary_ssn')->foreign('secretary_ssn')
                    ->references('ssn')->on('secretary')
                    ->nullable();
            $table->string('manager_ssn')->foreign('manager_ssn')
                    ->references('ssn')->on('manager')
                    ->nullable();
            $table->bigInteger('report_id')->foreign('report_id')
                    ->references('id')->on('report')
                    ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense');
    }
}
