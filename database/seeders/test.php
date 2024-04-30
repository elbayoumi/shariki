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
                    'general_formula' => 'الحالة الإجتماعية',
                    'f00_formula' => 'الحالة الإجتماعية للزوج المطلوبة:',
                    'm00_formula' => 'الحالة الإجتماعية للزوجة المطلوبة:',
                ],
                'a' => [
                    [
                        'self_formula_m00' => 'أعزب',
                        'self_formula_m00' => 'عزباء',
                        'f00_formula' => '1f00_formula',
                        'm00_formula' => 'عزباء',
                    ],
                    [
                        'self_formula_m00' => 'متزوج',
                        'f00_formula' => 'متزوج',
                    ],
                    [
                        'self_formula_m00' => 'مطلقة لم يتم الدخول بها',
                        'm00_formula' => 'مطلقة لم يتم الدخول بها',
                    ],
                    [
                        'general_formula' => 'مطلق',
                        'f00_formula' => '3f00_formula',
                        'm00_formula' => 'مطلقة',
                    ],
                    [
                        'general_formula' => 'أرمل',
                        'f00_formula' => '4f00_formula',
                        'm00_formula' => 'أرملة',
                    ],

                ]
            ],
            [
                'q' => [
                    'general_formula' => '1f00_formula',
                    'f00_formula' => '1f00_formula',
                    'm00_formula' => '1f00_formula',
                ],
                'a' => [
                    [
                        'general_formula' => '1f00_formula',
                        'f00_formula' => '1f00_formula',
                        'm00_formula' => '1f00_formula',
                    ],
                    [
                        'general_formula' => '2f00_formula',
                        'f00_formula' => '2f00_formula',
                        'm00_formula' => '2f00_formula',
                    ],
                    [
                        'general_formula' => '3f00_formula',
                        'f00_formula' => '3f00_formula',
                        'm00_formula' => '3f00_formula',
                    ],
                    [
                        'general_formula' => '4f00_formula',
                        'f00_formula' => '4f00_formula',
                        'm00_formula' => '4f00_formula',
                    ],

                ]
            ],
            [
                'q' => [
                    'general_formula' => '1f00_formula',
                    'f00_formula' => '1f00_formula',
                    'm00_formula' => '1f00_formula',
                ],
                'a' => [
                    [
                        'general_formula' => '1f00_formula',
                        'f00_formula' => '1f00_formula',
                        'm00_formula' => '1f00_formula',
                    ],
                    [
                        'general_formula' => '2f00_formula',
                        'f00_formula' => '2f00_formula',
                        'm00_formula' => '2f00_formula',
                    ],
                    [
                        'general_formula' => '3f00_formula',
                        'f00_formula' => '3f00_formula',
                        'm00_formula' => '3f00_formula',
                    ],
                    [
                        'general_formula' => '4f00_formula',
                        'f00_formula' => '4f00_formula',
                        'm00_formula' => '4f00_formula',
                    ],

                ]
            ],
            [
                'q' => [
                    'general_formula' => '1f00_formula',
                    'f00_formula' => '1f00_formula',
                    'm00_formula' => '1f00_formula',
                ],
                'a' => [
                    [
                        'general_formula' => '1f00_formula',
                        'f00_formula' => '1f00_formula',
                        'm00_formula' => '1f00_formula',
                    ],
                    [
                        'general_formula' => '2f00_formula',
                        'f00_formula' => '2f00_formula',
                        'm00_formula' => '2f00_formula',
                    ],
                    [
                        'general_formula' => '3f00_formula',
                        'f00_formula' => '3f00_formula',
                        'm00_formula' => '3f00_formula',
                    ],
                    [
                        'general_formula' => '4f00_formula',
                        'f00_formula' => '4f00_formula',
                        'm00_formula' => '4f00_formula',
                    ],

                ]
            ],
            [
                'q' => [
                    'general_formula' => '1f00_formula',
                    'f00_formula' => '1f00_formula',
                    'm00_formula' => '1f00_formula',
                ],
                'a' => [
                    [
                        'general_formula' => '1f00_formula',
                        'f00_formula' => '1f00_formula',
                        'm00_formula' => '1f00_formula',
                    ],
                    [
                        'general_formula' => '2f00_formula',
                        'f00_formula' => '2f00_formula',
                        'm00_formula' => '2f00_formula',
                    ],
                    [
                        'general_formula' => '3f00_formula',
                        'f00_formula' => '3f00_formula',
                        'm00_formula' => '3f00_formula',
                    ],
                    [
                        'general_formula' => '4f00_formula',
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
