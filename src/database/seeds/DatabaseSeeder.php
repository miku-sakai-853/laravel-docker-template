<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // TodoSeeder.phpで作成したクラスをcall()メソッドに登録することで実行可能になる
        $this->call([
            TodoSeeder::class,
        ]);
    }
}
