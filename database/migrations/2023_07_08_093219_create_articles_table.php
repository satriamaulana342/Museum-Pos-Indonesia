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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_category'); // Tambahkan kolom 'id_category' setelah kolom 'id'
            $table->string('heading', 50);
            $table->string('thumbnail', 250);
            $table->string('content', 5000);
            $table->timestamps();

            $table->foreign('id_category')->references('id')->on('categories'); // Buat foreign key ke kolom 'id' pada tabel 'categories'
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
