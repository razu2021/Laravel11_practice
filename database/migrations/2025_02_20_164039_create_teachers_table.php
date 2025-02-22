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
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('teacher_id');
            $table->unsignedBigInteger('university_unique_id');
            $table->string('teacher_name')->nullable();          
            $table->string('slug')->nullable()->unique();
            $table->string('status')->default(1);
            $table->string('post_status')->default(0);
            $table->integer('creator')->nullable();
            $table->integer('editor')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('university_unique_id')->references('university_id')->on('universities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('teachers',function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
};
