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
    Schema::create('url_clicks', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('short_url_id');
        $table->string('ip_address');
        $table->string('user_agent');
        $table->string('clicked_at');

        

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('url_clicks');
    }
};
