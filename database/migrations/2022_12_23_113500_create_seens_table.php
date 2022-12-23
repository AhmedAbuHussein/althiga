<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seens', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->index();
            $table->integer("visit_count")->default(1);
            $table->string('domain')->nullable()->index();
            $table->string('prev_link')->nullable()->index();
            $table->string('agent_name')->nullable()->index();
            $table->string('browser')->nullable()->index();
            $table->string('device')->nullable()->index();
            $table->string('os')->nullable()->index();
            $table->string('country_code')->nullable()->index();
            $table->string('country_name')->nullable()->index();
            $table->morphs('seenable');       // type  course
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
        Schema::dropIfExists('seens');
    }
}
