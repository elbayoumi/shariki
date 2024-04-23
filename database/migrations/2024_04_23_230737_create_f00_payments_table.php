<?php

use App\Models\Request\F00Request;
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
        Schema::create('f00_payments', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreignIdFor(F00Request::class)->constrained()->cascadeOnDelete();

            $table->string('stripe_payment_id')->unique();
            $table->enum('status', ['pending', 'paid', 'failed']);
            $table->decimal('amount', 8, 2);

            $table->boolean('is_successful')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f00_payments');
    }
};
