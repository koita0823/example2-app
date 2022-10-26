<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['id' => 1, 'name' => '自分'],
            ['id' => 2, 'name' => '友達'],
            ['id' => 3, 'name' => '家族'],
            ['id' => 4, 'name' => 'ペット'],
            ['id' => 5, 'name' => '仕事'],
            ['id' => 6, 'name' => 'バイト'],
            ['id' => 7, 'name' => '勉強'], 
            ['id' => 8, 'name' => 'お金'],
            ['id' => 9, 'name' => '恋愛'],
            ['id' => 10, 'name' => '家事'],
            ['id' => 11, 'name' => '健康'],
            ['id' => 12, 'name' => '就職'],
            ['id' => 13, 'name' => '食'],
            ['id' => 14, 'name' => '本'],
            ['id' => 15, 'name' => '音楽'],
            ['id' => 16, 'name' => '旅行'],
            ['id' => 17, 'name' => '美容'],
            ['id' => 18, 'name' => 'ゲーム'],
            ['id' => 19, 'name' => 'スポーツ'],
            ['id' => 20, 'name' => 'お酒'],
            ['id' => 21, 'name' => '学校'],
            ['id' => 22, 'name' => '交通機関'],
            ['id' =>23, 'name' => 'その他'],
        ];
        DB::table('about_what')->insert($params);
    }
}
