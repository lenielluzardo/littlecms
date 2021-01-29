<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->text('description');
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->string('discipline');
            $table->text('project_url');
            $table->timestamp('released_at')->useCurrent();;
            $table->timestamp('created_at')->useCurrent();;
            $table->timestamp('updated_at')->useCurrent();;
            $table->boolean('visible');
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
