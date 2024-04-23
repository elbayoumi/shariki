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
        Schema::create('male_interests', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();


            $table->enum('wife', ['first', 'second', 'third', 'fourth']);



            $table->enum('marital_status', ['single', 'divorced_not_consummated', 'divorced', 'widow', "doesnt_matter"]);
            $table->enum('want_children_custody', ['yes', 'no', 'doesnt_matter'])->nullable();
            $table->enum('sect', [
                'Sunni',
                'Maliki',
                'Shafi',
                'Hanafi',
                'Doesnt_matter'
            ]);
            $table->boolean('non_arabic_origins');
            $table->json('other_origins')->nullable();
            $table->json('city')->nullable();
            $table->enum('age', ['18-28', '28-38', '38-48', '48-58', 'doesnt_matter']);
            $table->enum('height', ['140-160', '160-180', '180-200', '200-220', 'doesnt_matter']);
            $table->enum('weight', ['60-80', '80-100', '100-120', '120-140', 'doesnt_matter']);
            $table->enum('eye_color',        [
                'Black',
                'Brown',
                'Blue',
                'Green',
                'Gray',
                'Hazel',
                'doesnt_matter'
            ]);
            $table->enum('wear_glasses', ['yes', 'no', 'doesnt_matter']);
            $table->enum(
                'glasses_type',
                ['medical', 'protective']
            )->nullable();
            $table->enum('wear_lenses', ['yes', 'no', 'doesnt_matter']);
            $table->enum(
                'lenses_type',
                ['medical', 'colored']
            )->nullable();
            $table->enum(
                'skin',
                ['white', 'brown', 'tan', 'blonde', 'doesnt_matter']
            );
            $table->enum(
                'hair',
                [
                    'light',
                    'medium',
                    'dense',
                    'slightly_bald',
                    'moderately_bald',
                    'completely_bald',
                    'doesnt_matter'
                ]
            );
            $table->enum(
                'hair_color',
                [
                    'black',
                    'brown',
                    'white',
                    'blond',
                    'doesnt_matter'
                ]
            );
            $table->enum(
                'hair_style',
                [
                    'straight',
                    'curly',
                    'wavy',
                    'doesnt_matter'
                ]
            );
            $table->enum('work', ['yes', 'no']);
            $table->enum('future_career_plans', [
                'agreed_with_spouse',
                'no',
                'doesnt_matter'
            ])->nullable();
            $table->enum('smoking', ['yes', 'no', 'doesnt_matter']);
            $table->enum('religious_commitment', ['yes', 'no', 'doesnt_matter']);
            $table->enum('cultural_traditions_commitment', ['yes', 'no', 'doesnt_matter']);
            $table->enum('cosmetic_surgery', ['yes', 'no', 'doesnt_matter']);
            $table->enum('personal_care_interest', [
                'no_interest',
                'low_interest',
                'medium_interest',
                'high_interest',
                'doesnt_matter'
            ])->nullable();
            $table->enum('global_brands_interest', [
                'no_interest',
                'low_interest',
                'medium_interest',
                'high_interest',
                'doesnt_matter'
            ])->nullable();
            $table->enum('abaya', ['yes', 'no']);
            $table->enum(
                'abaya_type',
                [
                    'plain',
                    'patterned',
                    'plain_and_patterned'
                ]
            )->nullable();
            $table->enum(
                'abaya_color',
                [
                    'black_only',
                    'colored_only',
                    'black_and_colored'
                ]
            )->nullable();
            $table->enum(
                'abaya_wearing_places',
                [
                    'public_places_only',
                    'events_only',
                    'all_conditions'
                ]
            )->nullable();
            $table->enum('abaya_requirement_while_travelling', ['yes', 'no', 'doesnt_matter'])->nullable();
            $table->enum('hijab', ['yes', 'no', 'doesnt_matter']);
            $table->enum(
                'hijab_type',
                [
                    'scarf',
                    'niqab',
                    'khimar',
                    'hijab'
                ]
            )->nullable();
            $table->enum('makeup_usage', ['yes', 'no', 'doesnt_matter']);
            $table->enum('makeup_usage_places', [
                'home',
                'work',
                'occasions',
                'all'
            ])->nullable();
            $table->enum(
                'makeup_usage_intensity',
                [
                    'light',
                    'medium',
                    'heavy'
                ]
            )->nullable();
            $table->enum('cooking_proficiency', ['yes', 'no', 'doesnt_matter']);
            $table->integer('cooking_proficiency_percentage')->nullable();
            $table->enum(
                'education_level',
                [
                    'doctorate',
                    'master',
                    'bachelor',
                    'diploma',
                    'high_school',
                    'other',
                    'doesnt_matter'
                ]
            );
            $table->enum('driving_license', ['yes', 'no', 'doesnt_matter']);
            $table->enum(
                'health_status',
                [
                    'fit_no_health_problems',
                    'fit_with_some_health_problems',
                    'doesnt_matter'
                ]
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('male_interests');
    }
};
