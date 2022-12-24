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
            $table->string('domain')->nullable();
            $table->string('prev_link')->nullable();
            $table->string('current_link')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('browser')->nullable();
            $table->string('device_family')->nullable();
            $table->string('device_name')->nullable();
            $table->string('os')->nullable();
            $table->string('os_type')->nullable();
            $table->string('country_code')->nullable();
            $table->string('country_name')->nullable();
            $table->nullableMorphs('seenable');       // type  course
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
