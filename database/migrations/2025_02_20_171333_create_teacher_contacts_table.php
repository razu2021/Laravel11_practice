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
        Schema::create('teacher_contacts', function (Blueprint $table) {
            $table->bigIncrements('teacher_contact_id');
            $table->unsignedBigInteger('teacher_unique_id')->unique();
            $table->string('teacher_phone')->nullable();          
            $table->string('teacher_email')->nullable();          
            $table->string('teacher_paddress')->nullable();          
            $table->string('slug')->nullable()->unique();
            $table->string('status')->default(1);
            $table->string('post_status')->default(0);
            $table->integer('creator')->nullable();
            $table->integer('editor')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('teacher_unique_id')->references('teacher_id')->on('teachers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::create('teacher_contacts',function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
};
