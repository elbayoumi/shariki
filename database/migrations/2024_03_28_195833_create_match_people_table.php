<?php

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
        Schema::create('match_people', function (Blueprint $table) {
            $table->id();


            $table->foreignIdFor(User::class,'male_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class,'female_id')->constrained()->cascadeOnDelete();

            $table->float('percent', 8, 2);

            $table->enum('male_staus',['pending','processing','matched','rejected'])
                ->default('pending');

            $table->enum('female_staus',['pending','processing','matched','rejected'])
                ->default('pending');

            $table->enum('status',['pending','processing','matched','rejected'])
                ->default('pending');


            $table->timestamp('male_matched_at')->nullable();

            $table->timestamp('female_matched_at')->nullable();

            $table->timestamp('matched_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_people');
    }
};
