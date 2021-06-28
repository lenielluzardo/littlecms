<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_module', function (Blueprint $table) {
            $table->id()->unsignedBigInteger()->autoIncrement();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('module_id');
            $table->timestamps();

            $table->foreign('menu_id')->references('id')->on('menus')
           ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('module_id')->references('id')->on('modules')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_modules');
    }
}
