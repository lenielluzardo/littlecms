<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->unsignedBigInteger()->autoIncrement();
            $table->string('name');
            $table->string('description')->default('*Default Category Description*');
            $table->boolean('active')->default(true);
            $table->integer('module_id')->default(0);
            $table->integer('parent_id')->default(0);
            $table->string('thumbnail')->default('https://via.placeholder.com/1000x200');
            $table->string('icon')->default('fa fa-cog');
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
        Schema::dropIfExists('categories');
    }
}
