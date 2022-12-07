<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('register_phone')->nullable();
            $table->float('lat', 8, 8, true)->nullable();
            $table->float('lng', 8, 8, true)->nullable();
            $table->text('values')->nullable(); // قيمنا تعرض في الصفحة الرئيسية
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
        Schema::dropIfExists('settings');
    }
}
