<?php

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
            $table->string('name');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
=======
=======
>>>>>>> c1850966f1bb5da9cfffe3f7e8c8213277b5b3d9
            $table->string('identifier');
            $table->string('annexed');
            $table->string('photo_url');
            $table->integer('city_id')->unsigned();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->string('user_tamps');
            $table->timestamps();
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
<<<<<<< HEAD
>>>>>>> c1850966f1bb5da9cfffe3f7e8c8213277b5b3d9
=======
>>>>>>> c1850966f1bb5da9cfffe3f7e8c8213277b5b3d9
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        Schema::drop('users');
=======
        Schema::dropIfExists('users');
>>>>>>> c1850966f1bb5da9cfffe3f7e8c8213277b5b3d9
=======
        Schema::dropIfExists('users');
>>>>>>> c1850966f1bb5da9cfffe3f7e8c8213277b5b3d9
    }
}
