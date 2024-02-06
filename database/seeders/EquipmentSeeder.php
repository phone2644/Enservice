<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipment')->insert([
            'name' => 'คอมพิวเตอร์',
            'description' => 'อุปกรณ์ที่เกี่ยวกับคอมพิวเตอร์',
            'problem_id' => 1,
        ]);
        DB::table('equipment')->insert([
            'name' => 'แอร์',
            'description' => 'อุปกรณ์ที่เกี่ยวกับแอร์ไม่ว่าจะเป็นรีโมทสายไฟที่เกี่ยวกับแอร์',
            'problem_id' => 1,
        ]);
        DB::table('equipment')->insert([
            'name' => 'โปรเจ็คเตอร์',
            'description' => 'อุปกรณ์ที่เกี่ยวกับโปรเจ็คเตอร์ไม่ว่าจะเป็นรีโมท',
            'problem_id' => 1,
        ]);
        DB::table('equipment')->insert([
            'name' => 'ที่สแกนนิ้วมือ',
            'description' => 'อุปกรณ์ที่เกี่ยวกับสแกนนิ้วมือ',
            'problem_id' => 1,
        ]);
    }
}
