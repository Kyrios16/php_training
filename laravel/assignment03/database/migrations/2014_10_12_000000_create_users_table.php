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
            $table->id();
            $table->string('author');
            $table->foreign('author')->references('id')->on('create_users_table')->onDelete('cascade');
            $table->string('gender');
            $table->string('address');
            $table->string('email');
            $table->foreign('email')->references('id')->on('create_users_table')->onDelete('cascade');
            $table->string('phone');
            $table->foreign('phone')->references('id')->on('create_users_table')->onDelete('cascade');
            $table->string('password');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
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
