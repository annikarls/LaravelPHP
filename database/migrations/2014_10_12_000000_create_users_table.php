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
            $table->bigIncrements('userId');    
            $table->string('userName');
            $table->string('userEmail')->unique();
            $table->timestamp('userEmail_verified_at')->nullable();
            $table->string('userPassword');
            $table->string('userRole');
            $table->rememberToken();
            $table->integer('beerId');
            $table->integer('eventId');
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
