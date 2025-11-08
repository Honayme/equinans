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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Ex: "Herman Miller"
            $table->text('content'); // Le texte du témoignage
            $table->string('image_path'); // Le chemin vers l'image, ex: 'images/author-1.jpg'
            $table->unsignedTinyInteger('rating')->default(5); // La note de 1 à 5
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
