<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->text('audience')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('policy')->nullable();
            $table->longText('copyright')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('audience');
            $table->dropColumn('requirements');
            $table->dropColumn('policy');
            $table->dropColumn('copyright');
        });
    }
}
