<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
      $table->increments('id');
      $table->string('first_name', 100);
      $table->string('last_name', 100);
      $table->string('phone');
      $table->string('email', 100)->unique();
      $table->string('password', 100);
      $table->boolean('confirmed')->default(0);
      $table->unsignedInteger('role_id');
      $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
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