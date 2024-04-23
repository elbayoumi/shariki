<?php

use App\Models\Request\F00Request;
use App\Models\Request\M00Request;
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
        Schema::create('compatibility_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(M00Request::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(F00Request::class)->constrained()->cascadeOnDelete();
            $table->decimal('score', 8, 2);
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compatibility_rates');
    }
};
