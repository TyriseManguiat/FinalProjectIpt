<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariesTable extends Migration
{
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key reference to users table
            $table->text('content'); // Content of the diary
            $table->timestamps(); // Created and updated timestamps

            // Foreign key constraint
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade'); // Cascade delete if user is deleted
        });
    }

    public function down()
    {
        Schema::dropIfExists('diaries');
    }
}
