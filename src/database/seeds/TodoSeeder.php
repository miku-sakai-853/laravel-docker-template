<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() // run()メソッド
    {
        // truncate()でテーブルのレコードをすべて削除するTRUNCATE文を実行
        // シーダーの実行によって開発者間のテストデータに差異が生じることを防ぐため、テーブルに存在するデータを全削除してからテストデータを投入させる
        DB::table('todos')->truncate();
        
        $testData = [ // テストデータを連想配列で用意
            [
                'content' => 'PHP Appセクションを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Laravel Lessonを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // DB:table('todos')でtableメソッドの引数のテーブルを操作する為の準備をする
        // insertメソッドで引数のデータをテーブルに投入するINSERT文を実行
        DB::table('todos')->insert($testData);
    }
}
