<?php

namespace Database\Seeders;

use App\Models\FixeAnswers;
use App\Models\FixedQuestions;
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
        $array = [

            [
                'q' => [
                    'f00_formula' => '1f00_formula',
                    'm00_formula' => '1f00_formula',
                ],
                'a' => [
                    [
                        'f00_formula' => '1f00_formula',
                        'm00_formula' => '1f00_formula',
                    ],
                    [
                        'f00_formula' => '2f00_formula',
                        'm00_formula' => '2f00_formula',
                    ],
                    [
                        'f00_formula' => '3f00_formula',
                        'm00_formula' => '3f00_formula',
                    ],
                    [
                        'f00_formula' => '4f00_formula',
                        'm00_formula' => '4f00_formula',
                    ],

                ]
            ],
            [
                'q' => [
                    'f00_formula' => '1f00_formula',
                    'm00_formula' => '1f00_formula',
                ],
                'a' => [
                    [
                        'f00_formula' => '1f00_formula',
                        'm00_formula' => '1f00_formula',
                    ],
                    [
                        'f00_formula' => '2f00_formula',
                        'm00_formula' => '2f00_formula',
                    ],
                    [
                        'f00_formula' => '3f00_formula',
                        'm00_formula' => '3f00_formula',
                    ],
                    [
                        'f00_formula' => '4f00_formula',
                        'm00_formula' => '4f00_formula',
                    ],

                ]
            ],
    ];

        $FixedQuestions = new FixedQuestions;

        foreach ($array as $key => $value) {
            $FixedQuestions = FixedQuestions::create($value['q']);
            foreach ($value['a'] as $key => $value) {
                $FixedQuestions->fixeAnswers()->create($value);
            }
        }
    }
}
