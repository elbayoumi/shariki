<?php

namespace Database\Seeders\Traits;

trait FixedQuestionSeederTrait
{

public function getData(){
    // $booleanA = [
    //     [
    //         'general_formula' => 'نعم',
    //         'f00_formula' => 'نعم',
    //         'm00_formula' => 'نعم',
    //     ],
    //     [
    //         'general_formula' => 'لا',
    //         'f00_formula' => 'لا',
    //         'm00_formula' => 'لا',
    //     ]

    // ];
    // $hiegh = [];
    // for ($i = 110; $i <= 230; $i++) {
    //     $hiegh[] = ['general_formula' => strval($i), 'f00_formula' => strval($i), 'm00_formula' => strval($i)];
    // }

    // [
    //     'fixed_questions' => [
    //         'fixed_questions_for_alls' => '',
    //         'f00_self_fixed_questions' => '',
    //         'm00_self_fixed_questions' => '',
    //         'f00_interested_fixed_questions' => '',
    //         'm00_interested_fixed_questions' => '',
    //     ],
    //     'fixe_answers' => [
    //         [
    //             'fixe_answers_for_alls' => '',
    //             'f00_self_fixe_answers' => '',
    //             'm00_self_fixe_answers' => '',
    //             'm00_interested_fixe_answers' => '',
    //             'f00_interested_fixe_answers' => '',
    //         ],
    //     ]
    //     ];

    $fixe_answers_boolean_for_alls= [
        [
            'fixe_answers_for_alls' => 'نعم',
        ],
        [
            'fixe_answers_for_alls' => 'لا',
        ]

    ];
    return  [


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

        [
            'fixed_questions' => [
                'm00_self_fixed_questions' => 'هل يوجد أصول غير عربية',
                'f00_self_fixed_questions' => 'هل يوجد أصول غير عربية',
                'f00_interested_fixed_questions' => 'وجود أصول غير عربية للزوج المطلوب',
                'm00_interested_fixed_questions' => 'وجود أصول غير عربية للزوجة المطلوبة',

            ],
            'fixe_answers' =>$fixe_answers_boolean_for_alls,
        ],
        [
            'fixed_questions' => [
                'fixed_questions_for_alls' => 'الطول(CM)',
                'f00_interested_fixed_questions' => 'طول الزوج المطلوب (CM)',
                'm00_interested_fixed_questions' => 'طول الزوجة المطلوبة (CM)',
            ],
            'fixe_answers' => [
                [
                    'fixe_answers_for_alls' => 'من 140 إلى 160 ',
                ],
                [
                    'fixe_answers_for_alls' => 'من 160 إلى 180 ',
                ],
                [
                    'fixe_answers_for_alls' => 'من 180 إلى 200',

                ],
                [
                    'fixe_answers_for_alls' => 'من 200 إلى 220',
                ],

            ]
        ],
        [
            'fixed_questions' => [
                'fixed_questions_for_alls' => 'العمر',
                'f00_interested_fixed_questions' => 'عمر الزوج المطلوبة',
                'm00_interested_fixed_questions' => 'عمر الزوجة المطلوبة',
            ],
            'fixe_answers' => [
                [
                    'fixe_answers_for_alls' => 'من 18 إلى 28',
                ],
                [
                    'fixe_answers_for_alls' => 'من 28 إلى 38',
                ],
                [
                    'fixe_answers_for_alls' => 'من 38 إلى 48',

                ],
                [
                    'fixe_answers_for_alls' => 'من 48 إلى 58',
                ],

            ]
        ],
    ];
}


}
