<?php

use App\Models\Answer;
use App\Models\Questions;
use App\Models\Request;
use App\Models\User;
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
        Schema::create('m00_answers', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Answer::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Request::class)->constrained()->cascadeOnDelete();
            $table->string('ans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m00_answers');
    }
};