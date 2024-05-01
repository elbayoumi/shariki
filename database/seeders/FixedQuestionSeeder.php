<?php

namespace Database\Seeders;

use App\Models\FixeAnswers;
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
            $hiegh[] = ['general_formula' => strval($i),'f00_formula' => strval($i), 'm00_formula' => strval($i)];
        }

        $array = [

            [
                'q' => [
                    'general_formula' => 'المذهب',
                    'f00_formula' => 'المذهب',
                    'm00_formula' => 'المذهب',
                ],
                'a' => [
                    [
                        'general_formula' => 'السني',
                        'f00_formula' => 'السني',
                        'm00_formula' => 'السني',
                    ],
                    [
                        'general_formula' => 'المالكي',
                        'f00_formula' => 'المالكي',
                        'm00_formula' => 'المالكي',
                    ],
                    [
                        'general_formula' => 'الشافعي',
                        'f00_formula' => 'الشافعي',
                        'm00_formula' => 'الشافعي',
                    ],
                    [
                        'general_formula' => 'الحنفي',
                        'f00_formula' => 'الحنفي',
                        'm00_formula' => 'الحنفي',
                    ],

                ]
            ],
        ];

        $FixedQuestions = new FixedQuestions();

        foreach ($array as $key => $value) {
            $FixedQuestions = FixedQuestions::create($value['q']);
            foreach ($value['a'] as $key => $value) {
                $FixedQuestions->fixeAnswers()->create($value);
            }
        }
    }
}
