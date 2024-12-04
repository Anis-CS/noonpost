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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('header1');
            $table->longText('description');
            $table->text('image');
            $table->longText('caption');
            $table->string('header2');
            $table->longText('description2');
            $table->longText('title');
            $table->text('short_description');
            $table->string('header3');
            $table->longText('long_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
