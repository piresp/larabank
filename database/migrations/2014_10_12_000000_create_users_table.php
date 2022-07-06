<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 45);
            $table->string('email', 45)->unique();
            $table->string('phone_number', 11);
            $table->string('address', 255)->nullable();
            $table->string('password');
            $table->tinyInteger('is_active');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};