<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fields', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('default content');
            $table->text('description')->default('default content');
            $table->text('thumbnail')->default('default content');
            $table->text('experience')->default('default content');
            $table->text('studies')->default('default content');
            $table->text('stack')->default('default content');
            $table->text('interests')->default('default content');
            $table->text('hobbies')->default('default content');
            $table->text('miscellaneous')->default('default content');
            $table->integer('user_id');
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
        Schema::dropIfExists('user_fields');
    }
}
