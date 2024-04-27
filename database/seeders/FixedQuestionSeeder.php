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
            [
                'q' => [
                    'general_formula' => 'هل يوجد أصول غير عربية',
                    'f00_formula' => 'هل يوجد أصول غير عربية',
                    'm00_formula' => 'هل يوجد أصول غير عربية',
                ],
                'a' => $booleanA
            ],
            [
                'q' => [
                    'general_formula' => 'الطول(CM)',
                    'f00_formula' => 'الطول(CM)',
                    'm00_formula' => 'الطول(CM)',
                ],
                'a' => $hiegh
            ],
            [
                'q' => [
                    'general_formula' => 'لون العين',
                    'f00_formula' => 'لون العين',
                    'm00_formula' => 'لون العين',
                ],
                'a' => [
                    [
                        'general_formula' => 'أسود',
                        'f00_formula' => 'أسود',
                        'm00_formula' => 'أسود',
                    ],
                    [
                        'general_formula' => 'عسلي',
                        'f00_formula' => 'عسلي',
                        'm00_formula' => 'عسلي',
                    ],
                    [
                        'general_formula' => 'بني',
                        'f00_formula' => 'بني',
                        'm00_formula' => 'بني',
                    ],
                    [
                        'general_formula' => 'رمادي',
                        'f00_formula' => 'رمادي',
                        'm00_formula' => 'رمادي',
                    ],
                    [
                        'general_formula' => 'خضراء',
                        'f00_formula' => 'خضراء',
                        'm00_formula' => 'خضراء',
                    ],

                ]
            ],
            [
                'q' => [
                    'general_formula' => 'لبس نظارة',
                    'f00_formula' => 'لبس نظارة',
                    'm00_formula' => 'لبس نظارة',
                ],
                'a' => $booleanA
            ],
            [
                'q' => [
                    'general_formula' => 'لبس عدسات',
                    'f00_formula' => 'لبس عدسات',
                    'm00_formula' => 'لبس عدسات',
                ],
                'a' => $booleanA
            ],
            [
                'q' => [
                    'general_formula' => 'لون البشرة',
                    'f00_formula' => 'لون البشرة',
                    'm00_formula' => 'لون البشرة',
                ],
                'a' => [
                    [
                        'general_formula' => 'أبيض',
                        'f00_formula' => 'أبيض',
                        'm00_formula' => 'أبيض',
                    ],
                    [
                        'general_formula' => 'أسمر',
                        'f00_formula' => 'أسمر',
                        'm00_formula' => 'أسمر',
                    ],
                    [
                        'general_formula' => 'حنطي',
                        'f00_formula' => 'حنطي',
                        'm00_formula' => 'حنطي',
                    ],

                ]
            ],
            [
                'q' => [
                    'general_formula' => 'الشعر',
                    'f00_formula' => 'الشعر',
                    'm00_formula' => 'الشعر',
                ],
                'a' => [
                    [
                        'general_formula' => 'خفيف',
                        'f00_formula' => 'خفيف',
                        'm00_formula' => 'خفيف',
                    ],
                    [
                        'general_formula' => 'متوسط',
                        'f00_formula' => 'متوسط',
                        'm00_formula' => 'متوسط',
                    ],
                    [
                        'general_formula' => 'صلع بسيط',
                        'f00_formula' => 'صلع بسيط',
                        'm00_formula' => 'صلع بسيط',
                    ],
                    [
                        'general_formula' => 'صلع متوسط',
                        'f00_formula' => 'صلع متوسط',
                        'm00_formula' => 'صلع متوسط',
                    ],
                    [
                        'general_formula' => 'صلع مبالغ',
                        'f00_formula' => 'صلع مبالغ',
                        'm00_formula' => 'صلع مبالغ',
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
