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
            ['title' => 'اخلاق و تربیت', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'ادبیات', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'اصول فقه', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'تاریخ اسلام', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'تفسیر و علوم قرآنی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'علوم انسانی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'علوم حدیث و درایه', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'فقه و حقوق اسلامی', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'فلسفه و منطق', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'کلام', 'user' => '0371714941', 'created_at' => now(), 'updated_at' => now()],
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
