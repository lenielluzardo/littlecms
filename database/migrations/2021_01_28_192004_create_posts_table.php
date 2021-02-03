<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->text('paragraph3')->nullable();
            $table->text('paragraph4')->nullable();
            $table->text('image1')->nullable();;
            $table->text('image2')->nullable();;
            $table->text('image3')->nullable();
            $table->text('image4')->nullable();
            $table->integer('rating')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->boolean('active')->default(true);
            $table->integer('user_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
