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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('color');
        });

        Schema::create('nonogram_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id');
            $table->foreignId('nonogram_id');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->foreign('nonogram_id')->references('id')->on('nonograms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nonogram_tag', function (Blueprint $table) {
            $table->dropForeign('nonogram_tag_tag_id_foreign');
            $table->dropForeign('nonogram_tag_nonogram_id_foreign');
        });
        Schema::dropIfExists('nonogram_tag');
        Schema::dropIfExists('tags');
    }
};
