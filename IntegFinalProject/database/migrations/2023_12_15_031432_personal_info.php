<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('PersonalInfo', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName')->nullable();
            $table->string('MiddleName')->nullable();
            $table->string('LastName');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('ContactNumber')->nullable();
            $table->boolean('Sex')->nullable();
            $table->string('BirthDate')->nullable();
            $table->unsignedBigInteger('ContactPerson')->nullable();
            $table->foreign('ContactPerson')->references('id')->on('ContactPerson');
        });
    }

    public function down(): void
    {
        //
    }
};
