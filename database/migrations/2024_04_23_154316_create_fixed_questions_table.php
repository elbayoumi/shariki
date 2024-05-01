<?php

use App\Models\FixedQuestionsCategory;
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
        Schema::create('fixed_questions', function (Blueprint $table) {

            $table->id();
            $table->foreignId('admin_id')->nullable()->constrained('admins');

            $table->foreignIdFor(FixedQuestionsCategory::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixed_questions');
    }
};
