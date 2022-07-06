<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('amount', 8, 2);
            $table->string('description', 255);
            $table->enum('type', ['debit', 'credit']);
            $table->unsignedBigInteger('account_id')->index();
            $table->unsignedBigInteger('check_id')->nullable()->index();
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('check_id')->references('id')->on('checks');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};