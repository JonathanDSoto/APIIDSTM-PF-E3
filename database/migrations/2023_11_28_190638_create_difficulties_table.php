<?php

use App\Models\Difficulty;
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
        Schema::create('difficulties', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::table('nonograms', function (Blueprint $table){
            $table->foreignIdFor(Difficulty::class, 'difficulty_id')->nullable();
            $table->foreign('difficulty_id')->references('id')->on('difficulties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nonograms', function (Blueprint $table){
            $table->dropForeignIdFor(Difficulty::class, 'difficulty_id');
            $table->dropColumn('difficulty_id');
        });
        Schema::dropIfExists('difficulties');
    }
};
