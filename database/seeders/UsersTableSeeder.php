<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(['id' => 1, 'name' => '秋山一郎']);
        User::insert(['id' => 2, 'name' => '井上二郎']);
        User::insert(['id' => 3, 'name' => '上田三郎']);
        User::insert(['id' => 4, 'name' => '江川四郎']);
        User::insert(['id' => 5, 'name' => '大山五郎']);
        User::insert(['id' => 6, 'name' => '加藤六郎']);
        User::insert(['id' => 7, 'name' => '北村七郎']);
        User::insert(['id' => 8, 'name' => '工藤八郎']);
        User::insert(['id' => 9, 'name' => '剣崎九郎']);
        User::insert(['id' => 10, 'name' => '小村十郎']);
        User::insert(['id' => 11, 'name' => '佐藤一郎']);
        User::insert(['id' => 12, 'name' => '志村二郎']);
        User::insert(['id' => 13, 'name' => '須崎三郎']);
        User::insert(['id' => 14, 'name' => '瀬川四郎']);
        User::insert(['id' => 15, 'name' => '園部五郎']);
        User::insert(['id' => 16, 'name' => '田中六郎']);
        User::insert(['id' => 17, 'name' => '千田七郎']);
        User::insert(['id' => 18, 'name' => '槻山八郎']);
        User::insert(['id' => 19, 'name' => '手塚九郎']);
        User::insert(['id' => 20, 'name' => '戸田十郎']);
    }
}
