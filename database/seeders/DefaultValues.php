<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultValues extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('post_formats')->insert([
            ['title' => 'پایان‌نامه', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'کتاب', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('languages')->insert([
            ['title' => 'فارسی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'عربی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'انگلیسی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'اردو', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'فرانسوی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('publishers')->insert([
            ['title' => 'بوستان کتاب', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'مرکز اسناد انقلاب اسلامی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'اطلاعات', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'آرما', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'حدیث', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('scientific_groups')->insert([
            ['title' => 'اخلاق و عرفان', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'ادبیات و هنر', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'اقتصاد', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'مدیریت', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'تاریخ،سیره و تراجم', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'ترجمه', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'تصحیح و تحقیق', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'تفسیر و علوم قرآن', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'تکنولوژی آموزشی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'حدیث، درایه و رجال', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'حقوق', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'علوم سیاسی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'علوم اجتماعی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'علوم تربیتی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'روانشناسی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'فقه و اصول', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'کلام', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'کتب مرجع', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'انقلاب اسلامی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('special_sections')->insert([
            ['title' => 'جهاد تبیین', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'فقه معاصر', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'ابعاد علمی بیانیه گام دوم انقلاب', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'زن و خانواده', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'الگوی اسلامی ایرانی پیشرفت', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'علوم انسانی اسلامی، فضای مجازی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'آسیب های اجتماعی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'جمعیت', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'اقتصاد مقاومتی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'سبک زندگی اسلامی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'هنر (فلسفه هنر، هنر در اسلام)', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'محیط زیست و منابع طبیعی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
        ]);



        DB::table('research_types')->insert([
        ]);

        DB::table('research_formats')->insert([
            ['title' => 'پایان‌نامه', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'کتاب', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('festivals')->insert([
            ['id'=>25,'title' => 'بیست و پنجم', 'start_date' => '1402/02/10', 'starter' => '0371714941', 'finish_date' => '1402/05/10', 'finisher' => '0371714941', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
