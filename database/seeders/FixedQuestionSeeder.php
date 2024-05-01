<?php

namespace Database\Seeders;

use App\Models\FixeAnswer\FixeAnswers;
use App\Models\FixedQuestion\FixedQuestions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixedQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booleanA = [
            [
                'general_formula' => 'نعم',
                'f00_formula' => 'نعم',
                'm00_formula' => 'نعم',
            ],
            [
                'general_formula' => 'لا',
                'f00_formula' => 'لا',
                'm00_formula' => 'لا',
            ]

        ];
        $hiegh = [];
        for ($i = 110; $i <= 230; $i++) {
            $hiegh[] = ['general_formula' => strval($i), 'f00_formula' => strval($i), 'm00_formula' => strval($i)];
        }

        $array = [


            [
                'fixed_questions' => ['fixed_questions_for_alls' => 'المذهب',],
                'fixe_answers' => [
                    [
                        'fixe_answers_for_alls' => 'السني',
                    ],
                    [
                        'fixe_answers_for_alls' => 'المالكي',
                    ],
                    [
                        'fixe_answers_for_alls' => 'الشافعي',

                    ],
                    [
                        'fixe_answers_for_alls' => 'الحنفي',
                    ],

                ]
            ],


        ];


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
