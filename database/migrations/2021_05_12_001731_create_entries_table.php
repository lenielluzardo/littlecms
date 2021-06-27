<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id()->unsignedBigInteger()->autoIncrement();
            $table->string('title');
            $table->text('preview_img');
            $table->text('preview_content');
            $table->text('content');
            $table->timestamp('published_at')->nullable();
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('user_id')->default(1);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('module_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
