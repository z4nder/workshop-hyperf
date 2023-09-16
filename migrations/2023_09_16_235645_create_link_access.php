<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CreateLinkAccess extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('link_access', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('origin', 30);
            $table->string('access_data', 100);
            $table->json('query_params');
            $table->unsignedInteger('link_id');
            $table->foreign('link_id')->references('id')->on('links')->onDelete('cascade');

            $table->datetimes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_access');
    }
}
