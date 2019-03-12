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
            $table->string('email', 250)->unique()->charset('utf8');
            $table->string('avatar', 250)->nullable();
            $table->string('firstName', 250);
            $table->string('secondName', 250)->nullable();
            $table->string('lastName', 250);
            $table->string('country', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('password');
            $table->string('mobile', 250);
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ['individual', 'business', 'admin']);
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->softDeletes();
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
