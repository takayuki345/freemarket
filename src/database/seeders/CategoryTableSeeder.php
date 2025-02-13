<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            [
                'id' => '1',
                'name' => 'ファッション'
            ],
            [
                'id' => '2',
                'name' => '家電'
            ],
            [
                'id' => '3',
                'name' => 'インテリア'
            ],
            [
                'id' => '4',
                'name' => 'レディース'
            ],
            [
                'id' => '5',
                'name' => 'メンズ'
            ],
            [
                'id' => '6',
                'name' => 'コスメ'
            ],
            [
                'id' => '7',
                'name' => '本'
            ],
            [
                'id' => '8',
                'name' => 'ゲーム'
            ],
            [
                'id' => '9',
                'name' => 'スポーツ'
            ],
            [
                'id' => '10',
                'name' => 'キッチン'
            ],
            [
                'id' => '11',
                'name' => 'ハンドメイド'
            ],
            [
                'id' => '12',
                'name' => 'アクセサリー'
            ],
            [
                'id' => '13',
                'name' => 'おもちゃ'
            ],
            [
                'id' => '14',
                'name' => 'ベビー・キッズ'
            ]
        ];
        DB::table('categories')->insert($contents);
    }
}
