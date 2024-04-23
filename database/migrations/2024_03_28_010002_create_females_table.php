<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('females', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->enum('gender',['F00'])->default('F00');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('grandfather_name');
            $table->string('tribe');
            $table->integer('mobile');
            $table->date('dob');
            $table->string('pob_country');
            $table->string('pob_city');
            $table->string('address_country');
            $table->string('address_city');
            $table->enum('sect',['سني','مالكي','شافعي','حنفي']);
            $table->boolean('non_arabic_origins');
            $table->json('other_origins')->nullable();

            //ملعومات الام
            $table->string('mother_nationality');
            $table->string('mother_tribe');
            $table->string('mother_pob_country');
            $table->string('mother_pob_city');

            //المظهر الخارجي
            $table->decimal('height');
            $table->decimal('weight');
            $table->enum('eye_color',['أسود','بني','أزرق','أخضر','رمادي','عسلي']);
            $table->enum('wear_glasses',['نعم','لا']);
            $table->enum('glasses_type',['طبية','حماية'])->nullable();
            $table->enum('wear_lenses',['نعم','لا']);
            $table->enum('lenses_type',['طبية','ملونة'])->nullable();

            //البشرة والشعر
            $table->enum('skin',['أبيض','أسمر','حنطي','أشقر' , 'غير ذلك']);
            $table->enum('hair',['خفيف' , 'متوسط' , 'كثيف' , 'صلع بسيط' , 'صلع متوسط' , 'صلع بالغ' ]);
            $table->enum('hair_color',[ 'أسود' , 'بني' , 'أبيض' , 'أشقر' , 'غير ذلك' ])->nullable();
            $table->enum('hail_style',['أملس','مجعد','مموج','غير ذلك']);

            //العمل والتعليم
            $table->enum('work', ['نعم', 'لا', 'أعمال حرة']);
            $table->enum('work_sector', ['الحكومي', 'الخاص'])->nullable();
            $table->integer('work_experience_years')->nullable();
            $table->enum('future_career_plans', ['نعم بالإتفاق مع الزوج وموافقتي', 'لا'])->nullable();
            $table->enum('education_level', ['دكتوراة', 'ماجستير', 'بكالوريوس', 'دبلوم', 'ثانوية', 'أخرى']);
            $table->string('education_specialization')->nullable();
            $table->string('other_education_level')->nullable();

            //الصحة
            $table->enum('smoking',['نعم','لا']);
            $table->enum('health_status', ['لائقة ولا توجد مشاكل صحية', 'لائقة ولدي بعض المشاكل الصحية']);
            $table->string('health_issues')->nullable();


            //الميول والعادات
            $table->enum('religious_commitment',['نعم','لا']);
            $table->enum('cultural_traditions_commitment',['نعم','لا']);


            //الزواج
            $table->enum('marital_status', ['single', 'divorced_not_consummated', 'divorced', 'widow', "doesnt_matter"]);
            $table->enum('guardian_approval_for_marriage', ['نعم', 'لا'])->nullable();
            $table->string('reason_for_divorce')->nullable();
            $table->date('divorce_year')->nullable();
            $table->boolean('divorce_iddah_completion')->nullable();
            $table->tinyInteger('children_count')->nullable();
            $table->json('children_ages')->nullable();
            $table->boolean('want_children_custody_with_husband')->nullable();


            //العباية
            $table->enum('abaya', ['نعم', 'لا']);
            $table->enum('abaya_type', ['ساده', 'منقشه', 'ساده ومنقشه معاً'])->nullable();
            $table->enum('abaya_color', ['أسود فقط', 'ملون فقط', 'أسود وملون معاً'])->nullable();
            $table->enum('abaya_wearing_places', ['الأماكن العامة فقط', 'في المناسبات فقط', 'في جميع الأحوال'])->nullable();
            $table->enum('abaya_requirement_while_travelling', ['نعم', 'لا', 'لا يهم'])->nullable();

            //العمليات الجراحية
            $table->boolean('surgery');
            $table->string('surgery_location')->nullable();

            //الحجاب
            $table->enum('hijab', ['نعم', 'لا']);
            $table->enum('hijab_type', ['شيلة', 'نقاب', 'غشوة', 'خمار'])->nullable();

            //مساحيق الوجه
            $table->enum('makeup_usage', ['نعم', 'لا']);
            $table->enum('makeup_usage_places', ['البيت', 'العمل', 'المناسبات', 'جميع ما ذكر'])->nullable();
            $table->enum('makeup_usage_intensity', ['خفيف', 'متوسط', 'مبالغ'])->nullable();

            //الإلمام بالطبخ
            $table->enum('cooking_proficiency', ['نعم', 'لا']);
            $table->integer('cooking_proficiency_percentage')->nullable();

            //العمليات التجميلية و العناية الشخصية
            $table->enum('cosmetic_surgery',['نعم','لا']);
            $table->string('cosmetic_surgery_location')->nullable();
            $table->enum('personal_care_interest', ['لا يوجد إهتمام', 'إهتمام بسيط', 'إهتمام متوسط', 'إهتمام عالي'])->nullable();
            $table->enum('global_brands_interest', ['لا يوجد إهتمام', 'إهتمام بسيط', 'إهتمام متوسط', 'إهتمام عالي'])->nullable();

            //القيادة
            $table->enum('driving_license',['نعم','لا']);

            //المهر
            $table->float('advance_dowry',8,2)->nullable();
            $table->float('posterior_dowry',8,2)->nullable();

            //السكن
            $table->enum('post_marriage_residence', ['سكن مستقل', 'سكن مع العائلة', 'لا يهم']);
            $table->enum('post_marriage_residence_location', ['السكن نفس الدولة والإمارة/المدينة', 'السكن نفس الدولة ولكن في إمارة/مدينة أخرى', 'السكن في دولة أخرى', 'لا يهم']);
            $table->enum('housemaid_desire', ['نعم', 'لا', 'لا يهم']);
            $table->enum('wedding_organization', ['حفلة في الصالة', 'حفلة في الفندق', 'حفلة عائلية في المنزل', 'لا يهم']);

            //الأقارب
            $table->boolean('relatives_outside_country');
            $table->json('relatives_outside_country_list')->nullable();

            //الشروط
            $table->boolean('conditions');
            $table->string('conditions_list')->nullable();

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('females');
    }
};
