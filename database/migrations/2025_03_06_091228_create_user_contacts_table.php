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
        Schema::create('user_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('user_name')->nullable();          
            $table->string('user_email')->nullable();          
            $table->string('user_phone')->nullable();          
            $table->text('subject')->nullable();          
            $table->text('messages')->nullable();          
            $table->string('file_name')->nullable();          
            $table->text('messages_reply')->nullable();          
            $table->string('slug')->nullable()->unique();
            $table->string('status')->default(1);
            $table->string('post_status')->default(0);
            $table->integer('creator')->nullable();
            $table->integer('editor')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('user_contacts',function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
};
