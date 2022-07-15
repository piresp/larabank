<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('balance', 15, 2)->default(0);
            $table->string('number')->unique();
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};