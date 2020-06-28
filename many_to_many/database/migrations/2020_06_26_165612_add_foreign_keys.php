<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tasks', function (Blueprint $table) {

        $table->foreign('employee_id', 'employeeRef')
              ->references('id')
              ->on('employees')
              ->onDelete('cascade');
      });

      Schema::table('employee_location', function (Blueprint $table) {

        $table->foreign('employee_id', 'employeeRefer')
              ->references('id')
              ->on('employees')
              ->onDelete('cascade');

        $table->foreign('location_id', 'locationRefer')
              ->references('id')
              ->on('locations')
              ->onDelete('cascade');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {

          $table->dropForeign('employeeRef');
        });

        Schema::table('employee_location', function (Blueprint $table) {

          $table->dropForeign('employeeRefer');
          $table->dropForeign('locationRefer');

        });
    }
}
