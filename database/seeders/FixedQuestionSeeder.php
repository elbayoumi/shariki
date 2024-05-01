<?php

namespace Database\Seeders;

use App\Models\FixeAnswer\FixeAnswers;
use App\Models\FixedQuestion\FixedQuestions;
use Database\Seeders\Traits\FixedQuestionSeederTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixedQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use FixedQuestionSeederTrait;

    public function run(): void
    {
        $array = $this->getData();
        foreach ($array as $key => $values) {
            $fixedQuestions = FixedQuestions::create();
            $fixedQuestionsId = $fixedQuestions->id;
            foreach ($values['fixed_questions'] as $key => $value) {

                DB::table($key)->insert(['fixed_questions_id' => $fixedQuestionsId, 'formula' => $value]);
            }

            $fixeAnswers = FixeAnswers::create(['fixed_questions_id' => $fixedQuestionsId]);

            foreach ($values['fixe_answers'] as $key => $value) {
                foreach ($value as $key => $value) {
                    DB::table($key)->insert(['fixe_answers_id' => $fixeAnswers->id, 'formula' => $value]);
                }
            }
        }
    }
}
