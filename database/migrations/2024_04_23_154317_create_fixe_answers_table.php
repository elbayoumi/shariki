<?php

use App\Models\Questions;
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
        Schema::create('fixe_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Questions::class)->constrained()->cascadeOnDelete();

            $table->string('m00_formula');
            $table->string('f00_formula');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixe_answers');
    }
};
