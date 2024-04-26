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
        $hiegh = [];
        for ($i = 110; $i <= 230; $i++) {
            $hiegh[] = ['f00_formula' => strval($i), 'm00_formula' => strval($i)];
        }

        $array = [

            [
                'q' => [
                    'f00_formula' => 'المذهب',
                    'm00_formula' => 'المذهب',
                ],
                'a' => [
                    [
                        'f00_formula' => 'السني',
                        'm00_formula' => 'السني',
                    ],
                    [
                        'f00_formula' => 'المالكي',
                        'm00_formula' => 'المالكي',
                    ],
                    [
                        'f00_formula' => 'الشافعي',
                        'm00_formula' => 'الشافعي',
                    ],
                    [
                        'f00_formula' => 'الحنفي',
                        'm00_formula' => 'الحنفي',
                    ],

                ]
            ],
            [
                'q' => [
                    'f00_formula' => 'هل يوجد أصول غير عربية',
                    'm00_formula' => 'هل يوجد أصول غير عربية',
                ],
                'a' => [
                    [
                        'f00_formula' => 'نعم',
                        'm00_formula' => 'نعم',
                    ],
                    [
                        'f00_formula' => 'لا',
                        'm00_formula' => 'لا',
                    ]

                ]
            ],
            [
                'q' => [
                    'f00_formula' => 'الطول(CM)',
                    'm00_formula' => 'الطول(CM)',
                ],
                'a' => $hiegh
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
