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
        Schema::create('student_hobbies', function (Blueprint $table) {
            $table->bigIncrements('hobby_id');
            $table->unsignedBigInteger('student_unique_id')->nullable();
            $table->foreign('student_unique_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->string('hobby')->nullable();
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
        Schema::create('student_hobbies',function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
};
