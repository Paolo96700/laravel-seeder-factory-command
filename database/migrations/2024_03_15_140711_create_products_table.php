<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->string('EAN_code', 13);
            $table->decimal('price');
            $table->boolean('evidence');
            $table->timestamps();

            // Aggiungi la chiave esterna
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
