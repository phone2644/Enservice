<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('problems')->insert([
            'topic' => 'หน้าจอเสีย',
            'problem' => 'ไฟกระพริบไม่สามารถเปิดได้',
           

        ]);
        DB::table('problems')->insert([
            'topic' => 'แอร์เปิดไม่ได้',
            'problem' => 'ไม่สามารถเปิดได้',
           

        ]);
        DB::table('problems')->insert([
            'topic' => 'โปรเจ็คเตอร์เปิดไม่ได้',
            'problem' => 'ไม่สามารถเปิดได้',
           

        ]);
    }
}
