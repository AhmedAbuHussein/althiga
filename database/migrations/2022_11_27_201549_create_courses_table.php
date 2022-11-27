<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->text('title')->nullable();
            $table->longText('details')->nullable();
            $table->text('title2')->nullable();
            $table->longText('details2')->nullable();
            $table->string('accreditation_num')->nullable();
            $table->text('days')->nullable(); // السبت من كل اسبوع
            $table->integer('duration')->nullable(); // 5 day
            $table->float('houre_per_day')->nullable();
            $table->text('certification')->nullable();
            $table->text('languages')->nullable();
            $table->boolean('show_single_price')->default(false);
            $table->float('price')->nullable();
            $table->float('discount_price')->nullable();
            $table->text('price_role')->nullable();

            $table->boolean('show_group_price')->default(false);
            $table->float('group_price')->nullable();
            $table->float('discount_group_price')->nullable();
            $table->text('group_price_role')->nullable();

            $table->string('register_form_file')->nullable();
            $table->string('image')->nullable();

            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnDelete();

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
        Schema::dropIfExists('courses');
    }
}
