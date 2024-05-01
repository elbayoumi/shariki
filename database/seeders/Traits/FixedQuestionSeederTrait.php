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


    ];
}


}
