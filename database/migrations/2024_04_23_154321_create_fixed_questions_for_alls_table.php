<?php

use App\Models\FixedQuestion\FixedQuestions;
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
        Schema::create('fixed_questions_for_alls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FixedQuestions::class)->constrained()->cascadeOnDelete();
            $table->string('formula');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixed_questions_for_alls');
    }
};
