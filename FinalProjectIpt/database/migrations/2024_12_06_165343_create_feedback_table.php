<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('feedback')) {
            Schema::create('feedback', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users'); // Adjust according to your needs
                $table->string('email');
                $table->enum('age', ['below 18', '18-24', '25-34', '35-44', '45-54', '55-64', '65 and Above']);
                $table->enum('feedback_type', ['Suggestion', 'Bug', 'General']);
                $table->text('remark')->nullable();
                $table->timestamp('timestamp')->useCurrent();
                $table->timestamps();
            });
        }
    }
}    