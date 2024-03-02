<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('webhooks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('update_id');
            $table->bigInteger('message_id');
            $table->bigInteger('from_id');
            $table->boolean('from_is_bot');
            $table->string('from_first_name');
            $table->string('from_last_name')->nullable();
            $table->string('from_username')->nullable();
            $table->string('from_language_code')->nullable();
            $table->bigInteger('chat_id');
            $table->string('chat_first_name');
            $table->string('chat_last_name')->nullable();
            $table->string('chat_username')->nullable();
            $table->string('chat_type');
            $table->bigInteger('date');
            $table->text('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webhooks');
    }
};
