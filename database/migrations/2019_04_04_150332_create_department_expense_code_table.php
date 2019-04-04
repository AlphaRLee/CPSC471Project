<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentExpenseCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_expense_code', function (Blueprint $table) {
            $table->bigInteger('department_id')->foreign('department_id')->references('id')->on('department');
            $table->bigInteger('expense_code_id')->foreign('expense_code_id')->references('id')->on('expense_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_expense_code');
    }
}
