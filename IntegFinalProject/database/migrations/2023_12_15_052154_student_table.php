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
        Schema::create('StudentTable', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PersonalInfoID');
            $table->foreign('PersonalInfoID')->references('id')->on('PersonalInfo');
            $table->string('Year')->nullable();
            $table->string('Section')->nullable();
            $table->string('Course')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
