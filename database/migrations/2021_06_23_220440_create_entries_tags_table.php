<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries_tags', function (Blueprint $table) {
            $table->id()->unsignedBigInteger()->autoIncrement();
            $table->unsignedBigInteger('entry_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->foreign('entry_id')->references('id')->on('entries')
            ->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('tag_id')->references('id')->on('tags')
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
        Schema::dropIfExists('entries_tags');
    }
}
