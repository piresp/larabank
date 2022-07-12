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
            $table->timestamps();

            $table->foreignId('account_id')->index()->constrained();
            $table->foreignId('check_id')->nullable()->index()->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};