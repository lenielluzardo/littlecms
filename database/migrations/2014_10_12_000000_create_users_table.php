<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unsignedBigInteger()->autoIncrement();
            $table->string('name');
            $table->string('nickname')->unique();
            $table->string('email')->unique();
            $table->string('secondary_email')->unique();
            $table->string('recovery_email')->nullable();
            $table->string('password');
            $table->text('description')->nullable();
            $table->text('about')->nullable();
            $table->text('profile_img')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('active')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
