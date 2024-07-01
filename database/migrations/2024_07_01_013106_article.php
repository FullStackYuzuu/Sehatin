<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id('aid'); // Change this line to use 'uuid' if needed: $table->uuid('aid');
            $table->foreignId('uid')->constrained('users'); // Foreign key constraint to 'users' table
            $table->string('name');
            $table->text('desc');
            $table->timestamps();

            // If you want to cascade delete articles when a user is deleted, uncomment the following line:
            // $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
