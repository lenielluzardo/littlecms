<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_user', function (Blueprint $table) {
            $table->id()->unsignedBigInteger()->autoIncrement();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('menu_id')->references('id')->on('menus')
            ->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('menus_users');
    }
}
