<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file', 255);
            $table->string('description', 255);
            $table->decimal('amount', 8, 2);
            $table->enum('status', ['pending', 'approved', 'rejected'])->index();
            $table->unsignedBigInteger('account_id')->index();
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('checks');
    }
};