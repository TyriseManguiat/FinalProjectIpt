<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key reference to users table
            $table->string('email'); // Email of the user
            $table->string('age'); // Age group
            $table->string('feedback_type'); // Type of feedback (e.g., Suggestion, Bug, etc.)
            $table->text('remark')->nullable(); // Feedback content
            $table->timestamp('timestamp')->useCurrent(); // Timestamp for feedback submission
            $table->timestamps(); // Created at, updated at columns

            // Foreign key constraint for user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
