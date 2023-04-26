<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        //! Image is Postponed
        
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->text('text');
            // $table->string('image')->default('default.png');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
