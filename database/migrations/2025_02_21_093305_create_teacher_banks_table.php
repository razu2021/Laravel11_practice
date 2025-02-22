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
        Schema::create('teacher_banks', function (Blueprint $table) {
            $table->bigIncrements('teacher_bank_id');
            $table->unsignedBigInteger('contact_unique_id')->unique();
            $table->string('bank_name')->nullable();          
            $table->string('account_number')->nullable();          
            $table->string('routing_number')->nullable();          
            $table->string('account_type')->nullable();          
            $table->string('slug')->nullable()->unique();
            $table->string('status')->default(1);
            $table->string('post_status')->default(0);
            $table->integer('creator')->nullable();
            $table->integer('editor')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('contact_unique_id')->references('teacher_contact_id')->on('teacher_contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('teacher_banks',function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
};
