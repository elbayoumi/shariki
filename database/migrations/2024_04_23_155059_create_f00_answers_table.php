<?php

use App\Models\F00Request;
use App\Models\FixeAnswers;
use App\Models\FixedQuestions;
use App\Models\Request;
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
        Schema::create('f00_answers', function (Blueprint $table) {
            $table->id();
            
            $table->foreignIdFor(F00Request::class)->constrained()->cascadeOnDelete();

            $table->foreignIdFor(FixeAnswers::class)->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f00_answers');
    }
};
