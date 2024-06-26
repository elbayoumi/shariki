<?php

use App\Models\FixeAnswer\FixeAnswers;
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
        Schema::create('m00_interested_fixe_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FixeAnswers::class)->constrained()->cascadeOnDelete();
            $table->string('formula');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m00_interested_fixe_answers');
    }
};
