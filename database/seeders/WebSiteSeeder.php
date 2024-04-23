<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $M00=[
            'wife',['first'=>'الاولي','second'=>'الثانية','third'=>'الثالثة','fourth'=>'الرابعة'],
            'marital_status', ['single'=>'عزباء', 'divorced_not_consummated'=>'مطلقة لم يتم الدخول بها', 'divorced'=>'مطلقة', 'widow'=>'أرملة', "doesnt_matter"=>'لا يهم'],
    ];
        $F00=[];

        DB::table('web_sites')->insert([
            'M00' =>$M00,
            'F00' => $F00,
        ]);
    }


}
