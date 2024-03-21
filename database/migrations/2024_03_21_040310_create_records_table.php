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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('lfm')->comment('ФИО');
            $table->string('company')->comment('название компании');
            $table->string('phone')->comment('номер телефона');
            $table->string('email')->comment('адрес почты');
            $table->dateTime('date of birth')->comment('дата рождения');
            $table->string('photo_url')->comment('путь к фото');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
