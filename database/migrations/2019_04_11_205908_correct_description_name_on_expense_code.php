<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrectDescriptionNameOnExpenseCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Fix typo desription into descrit
        Schema::table('expense_code', function (Blueprint $table) {
            $table->dropColumn('desription');
            $table->text('description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Restore original typo
        Schema::table('expense_code', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->text('desription');
        });
    }
}
