<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('sid'); // Change this line to use 'uuid' if needed: $table->uuid('sid');
            $table->foreignId('uid'); // Foreign key constraint to 'users' table
            $table->foreignId('did'); // Foreign key constraint to 'doctors' table
            $table->date('date');
            $table->enum('status', ['notified', 'unnotified'])->default('unnotified');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
};
