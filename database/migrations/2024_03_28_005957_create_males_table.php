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
        Schema::create('males', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();

            $table->enum('gender',['M00'])->default('M00');

            //المعلومات الشخصية
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
            $table->boolean('ability_to_marry');

            //الصحة
            $table->enum('smoking',['نعم','لا']);
            $table->enum('health_status', ['لائقة ولا توجد مشاكل صحية', 'لائقة ولدي بعض المشاكل الصحية']);
            $table->string('health_issues')->nullable();


            //الميول والعادات
            $table->enum('religious_commitment',['نعم','لا']);
            $table->enum('cultural_traditions_commitment',['نعم','لا']);
            $table->enum('education_level', ['دكتوراة', 'ماجستير', 'بكالوريوس', 'دبلوم', 'ثانوية', 'أخرى']);
            $table->string('education_specialization')->nullable();
            $table->string('other_education_level')->nullable();

            //الزواج
            $table->enum('marital_status',['أعزب', 'متزوج', 'مطلق', 'أرمل']);
            $table->integer('children_count')->nullable();
            $table->json('children_ages')->nullable();
            $table->enum('custodian',['الأب','الأم'])->nullable();
            $table->enum('children_with_new_wife',['نعم', 'لا', 'لا يهم'])->nullable();
            $table->boolean('marriage_approval_from_family');
            $table->enum('guardian_approval_for_marriage', ['نعم', 'لا'])->nullable();
            $table->string('reason_for_divorce')->nullable();
            $table->date('divorce_year')->nullable();
            $table->boolean('divorce_iddah_completion')->nullable();
            $table->boolean('want_children_custody_with_spouse')->nullable();


            //العمليات الجراحية
            $table->boolean('surgery');
            $table->string('surgery_location')->nullable();

            //العناية الشخصية
            $table->enum('personal_care_interest', ['لا يوجد إهتمام', 'إهتمام بسيط', 'إهتمام متوسط', 'إهتمام عالي'])->nullable();
            $table->enum('global_brands_interest', ['لا يوجد إهتمام', 'إهتمام بسيط', 'إهتمام متوسط', 'إهتمام عالي'])->nullable();

            //المهر
            $table->float('advance_dowry',8,2)->nullable();
            $table->float('posterior_dowry',8,2)->nullable();

            //السكن
            $table->enum('post_marriage_residence', ['سكن مستقل', 'سكن مع العائلة', 'لا يهم']);
            $table->enum('post_marriage_residence_location', ['السكن نفس الدولة والإمارة/المدينة', 'السكن نفس الدولة ولكن في إمارة/مدينة أخرى', 'السكن في دولة أخرى', 'لا يهم']);
            $table->boolean('housemaid_desire', ['نعم', 'لا', 'لا يهم']);
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
        Schema::dropIfExists('males');
    }
};
