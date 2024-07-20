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
        Schema::create('web_settings', function (Blueprint $table) {
            $table->id();
            $table->string('web_title')->nullable();
            $table->string('download_link')->nullable();
            $table->string('video_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('icon_image')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('alternate_logo_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_settings');
    }
};
