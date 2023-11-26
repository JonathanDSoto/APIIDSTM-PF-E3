<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('nonograms', function (Blueprint $table){
            $table->foreignIdFor(Category::class, 'category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nonograms', function (Blueprint $table){
            $table->dropForeignIdFor(Category::class, 'category_id');
            $table->dropColumn('category_id');
        });
        Schema::dropIfExists('categories');
    }
};
