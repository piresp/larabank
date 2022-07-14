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
            $table->string('file')->nullable();
            $table->decimal('amount', 8, 2);
            $table->enum('status', ['pending', 'approved', 'rejected'])->index();
            $table->timestamps();

            $table->foreignId('account_id')->index()->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('checks');
    }
};