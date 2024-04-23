<?php

namespace App\Models\Traits;

trait MaleInterestAttributesTrait
{

    private function boolQ($prop)
    {
        $q = ['yes' => 'نعم', 'no' => 'لا', 'doesnt_matter' => 'لا يهم'];
        return ['ar' => $q[$prop], 'en' => $prop];
    }
    private function interestQ($prop)
    {
        $q = [
            'no_interest' => 'لا يوجد إهتمام',
            'low_interest' => 'إهتمام بسيط',
            'medium_interest' => 'إهتمام متوسط',
            'high_interest' => 'إهتمام عالي',
            'doesnt_matter' => 'لا يهم'
        ];
        return ['ar' => $q[$prop], 'en' => $prop];
    }
    private function boolQR($prop)
    {
        $q = ['yes' => 'نعم', 'no' => 'لا'];
        return ['ar' => $q[$prop], 'en' => $prop];
    }
    public function getWifeAttribute($wife)
    {
        $wifeArr = ['first' => 'الاولي', 'second' => 'الثانية', 'third' => 'الثالثة', 'fourth' => 'الرابعة'];
        return ['ar' => $wifeArr[$wife], 'en' => $wife];
    }

    public function getMaritalStatusAttribute($marital_status)
    {
        $marital_statusArr = ['single' => 'عزباء', 'divorced_not_consummated' => 'مطلقة لم يتم الدخول بها', 'divorced' => 'مطلقة', 'widow' => 'أرملة', "doesnt_matter" => 'لا يهم'];
        return ['ar' => $marital_statusArr[$marital_status], 'en' => $marital_status];
    }

    public function getWantChildrenCustodyAttribute($want_children_custody)
    {
        $want_children_custodyArr = ['yes' => 'نعم', 'no' => 'لا', 'doesnt_matter' => 'لا يهم'];
        return ['ar' => $want_children_custodyArr[$want_children_custody], 'en' => $want_children_custody];
    }

    public function getSectAttribute($sect)
    {
        $sectArr = [
            'سني' => 'Sunni',
            'مالكي' => 'Maliki',
            'شافعي' => 'Shafi',
            'حنفي' => 'Hanafi',
            'لا يهم' => 'doesnt_matter'
        ];
        return ['ar' => $sectArr[$sect], 'en' => $sect];
    }

    public function getAgeAttribute($age)
    {
        return $age;
    }

    public function getHeightAttribute($height)
    {
        return $height;
    }

    public function getWeightAttribute($weight)
    {
        return $weight;
    }

    public function getEyeColorAttribute($eye_color)
    {
        $eye_colorArr = [
            'أسود' => 'Black',
            'بني' => 'Brown',
            'أزرق' => 'Blue',
            'أخضر' => 'Green',
            'رمادي' => 'Gray',
            'عسلي' => 'Hazel',
            'لا يهم' => 'doesnt_matter'
        ];


        return ['ar' => $eye_colorArr[$eye_color], 'en' => $eye_color];
    }

    public function getWearGlassesAttribute($wear_glasses)
    {
        return $this->boolQ($wear_glasses);
    }

    public function getGlassesTypeAttribute($glasses_type)
    {

        $glasses_typeArr = ['medical' => 'طبية', 'protective' => 'حماية'];
        return ['ar' => $glasses_typeArr[$glasses_type], 'en' => $glasses_type];
    }

    public function getWearLensesAttribute($wear_lenses)
    {
        return $this->boolQ($wear_lenses);
    }

    public function getLensesTypeAttribute($lenses_type)
    {

        $lenses_typeArr = ['medical' => 'طبية', 'colored' => 'ملونة'];
        return ['ar' => $lenses_typeArr[$lenses_type], 'en' => $lenses_type];
    }

    public function getSkinAttribute($skin)
    {

        $skinArr = ['white' => 'أبيض', 'brown' => 'أسمر', 'tan' => 'حنطي', 'blonde' => 'أشقر', 'doesnt_matter' => 'لا يهم'];
        return ['ar' => $skinArr[$skin], 'en' => $skin];
    }

    public function getHairAttribute($hair)
    {

        $hairArr = [
            'light' => 'خفيف',
            'medium' => 'متوسط',
            'dense' => 'كثيف',
            'slightly_bald' => 'صلع بسيط',
            'moderately_bald' => 'صلع متوسط',
            'completely_bald' => 'صلع بالغ',
            'doesnt_matter' => 'لا يهم'
        ];
        return ['ar' => $hairArr[$hair], 'en' => $hair];
    }

    public function getHairColorAttribute($hair_color)
    {

        $hair_colorArr = [
            'black' => 'أسود',
            'brown' => 'بني',
            'white' => 'أبيض',
            'blond' => 'أشقر',
            'doesnt_matter' => 'لا يهم'
        ];
        return ['ar' => $hair_colorArr[$hair_color], 'en' => $hair_color];
    }

    public function getHairStyleAttribute($hair_style)
    {

        $hair_styleArr = [
            'straight' => 'أملس',
            'curly' => 'مجعد',
            'wavy' => 'مموج',
            'doesnt_matter' => 'لا يهم'
        ];
        return ['ar' => $hair_styleArr[$hair_style], 'en' => $hair_style];
    }

    public function getWorkAttribute($work)
    {
        return $this->boolQR($work);
    }

    public function getFutureCareerPlansAttribute($future_career_plans)
    {
        $future_career_plansArr = [
            'agreed_with_spouse' => 'نعم بالإتفاق مع الزوجة وموافقتي',
            'no' => 'لا',
            'doesnt_matter' => 'لا يهم'
        ];
        return ['ar' => $future_career_plansArr[$future_career_plans], 'en' => $future_career_plans];
    }

    public function getSmokingAttribute($smoking)
    {
        return $this->boolQ($smoking);
    }

    public function getReligiousCommitmentAttribute($religious_commitment)
    {
        return $this->boolQ($religious_commitment);
    }

    public function getCulturalTraditionsCommitmentAttribute($cultural_traditions_commitment)
    {
        return $this->boolQ($cultural_traditions_commitment);
    }

    public function getCosmeticSurgeryAttribute($cosmetic_surgery)
    {
        return $this->boolQ($cosmetic_surgery);
    }

    public function getPersonalCareInterestAttribute($personal_care_interest)
    {
        return $this->interestQ($personal_care_interest);
    }

    public function getGlobalBrandsInterestAttribute($global_brands_interest)
    {
        return $this->interestQ($global_brands_interest);
    }

    public function getAbayaAttribute($abaya)
    {
        return $this->boolQR($abaya);
    }

    public function getAbayaTypeAttribute($abaya_type)
    {
        $abaya_typeArr =
            [
                'plain' => 'ساده',
                'patterned' => 'منقشه',
                'plain_and_patterned' => 'ساده ومنقشه معاً'
            ];
        return ['ar' => $abaya_typeArr[$abaya_type], 'en' => $abaya_type];
    }

    public function getAbayaColorAttribute($abaya_color)
    {
        $abaya_colorArr =
            [
                'black_only' => 'أسود فقط',
                'colored_only' => 'ملون فقط',
                'black_and_colored' => 'أسود وملون معاً'
            ];
        return ['ar' => $abaya_colorArr[$abaya_color], 'en' => $abaya_color];
    }

    public function getAbayaWearingPlacesAttribute($abaya_wearing_places)
    {
        $abaya_wearing_placesArr =
            [
                'public_places_only' => 'الأماكن العامة فقط',
                'events_only' => 'في المناسبات فقط',
                'all_conditions' => 'في جميع الأحوال'
            ];
        return ['ar' => $abaya_wearing_placesArr[$abaya_wearing_places], 'en' => $abaya_wearing_places];
    }

    public function getAbayaRequirementWhileTravellingAttribute($abaya_requirement_while_travelling)
    {
        return $this->boolQ($abaya_requirement_while_travelling);
    }

    public function getHijabAttribute($hijab)
    {
        return $this->boolQ($hijab);
    }

    public function getHijabTypeAttribute($hijab_type)
    {
        $hijab_typeArr =
            [
                'scarf' => 'شيلة',
                'niqab' => 'نقاب',
                'khimar' => 'غشوة',
                'hijab' => 'خمار'
            ];
        return ['ar' => $hijab_typeArr[$hijab_type], 'en' => $hijab_type];
    }

    public function getMakeupUsageAttribute($makeup_usage)
    {
        return $this->boolQ($makeup_usage);
    }

    public function getMakeupUsagePlacesAttribute($makeup_usage_places)
    {
        $makeup_usage_placesArr = [
            'home' => 'البيت',
            'work' => 'العمل',
            'occasions' => 'المناسبات',
            'all' => 'جميع ما ذكر'
        ];
        return ['ar' => $makeup_usage_placesArr[$makeup_usage_places], 'en' => $makeup_usage_places];
    }

    public function getMakeupUsageIntensityAttribute($makeup_usage_intensity)
    {
        $makeup_usage_intensityArr =
            [
                'light' => 'خفيف',
                'medium' => 'متوسط',
                'heavy' => 'مبالغ'
            ];
        return ['ar' => $makeup_usage_intensityArr[$makeup_usage_intensity], 'en' => $makeup_usage_intensity];
    }

    public function getCookingProficiencyAttribute($cooking_proficiency)
    {
        return $cooking_proficiency;
    }

    public function getEducationLevelAttribute($education_level)
    {
        $education_levelArr =
            [
                'doctorate' => 'دكتوراة',
                'master' => 'ماجستير',
                'bachelor' => 'بكالوريوس',
                'diploma' => 'دبلوم',
                'high_school' => 'ثانوية',
                'other' => 'أخرى',
                'doesnt_matter' => 'لا يهم'
            ];
        return ['ar' => $education_levelArr[$education_level], 'en' => $education_level];
    }

    public function getDrivingLicenseAttribute($driving_license)
    {
        return $this->boolQ($driving_license);
    }

    public function getHealthStatusAttribute($health_status)
    {
        $health_statusArr =
            [
                'fit_no_health_problems' => 'لائقة ولا توجد مشاكل صحية',
                'fit_with_some_health_problems' => 'لائقة ولدي بعض المشاكل الصحية',
                'doesnt_matter' => 'لا يهم'
            ];
        return ['ar' => $health_statusArr[$health_status], 'en' => $health_status];
    }
}
