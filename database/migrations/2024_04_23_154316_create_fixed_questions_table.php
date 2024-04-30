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

            $table->string('self_formula_m00')->nullable();
            $table->string('self_formula_f00')->nullable();
            $table->string('m00_formula')->nullable();
            $table->string('f00_formula')->nullable();
            $table->enum('status',['F00','M00','General'])->default('General');
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
