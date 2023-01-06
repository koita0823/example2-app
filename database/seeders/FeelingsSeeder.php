<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeelingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['id' => 1, 'name' => '満足'],
            ['id' => 2, 'name' => '感謝'],
            ['id' => 3, 'name' => '嬉しい'],
            ['id' => 4, 'name' => 'ワクワク'],
            ['id' => 5, 'name' => '好き'],
            ['id' => 6, 'name' => '楽しい'],
            ['id' => 7, 'name' => '感心'],
            ['id' => 8, 'name' => '面白い'],
            ['id' => 9, 'name' => 'スッキリ'],
            ['id' => 10, 'name' => '安心'],
            ['id' => 11, 'name' => '退屈'],
            ['id' => 12, 'name' => 'モヤモヤ'],
            ['id' => 13, 'name' => '緊張'],
            ['id' => 14, 'name' => '不安'],
            ['id' => 15, 'name' => '悲しい'],
            ['id' => 16, 'name' => '嫌い'],
            ['id' => 17, 'name' => '後悔'],
            ['id' => 18, 'name' => '怖い'],
            ['id' => 19, 'name' => 'イライラ'],
            ['id' => 20, 'name' => '怒り'],
            ['id' => 21, 'name' => 'その他'],
          
        ];
        DB::table('feelings')->insert($params);
    }
}
