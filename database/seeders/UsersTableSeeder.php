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
        User::insert(['name' => '秋山一郎']);
        User::insert(['name' => '井上二郎']);
        User::insert(['name' => '上田三郎']);
        User::insert(['name' => '江川四郎']);
        User::insert(['name' => '大山五郎']);
        User::insert(['name' => '加藤六郎']);
        User::insert(['name' => '北村七郎']);
        User::insert(['name' => '工藤八郎']);
        User::insert(['name' => '剣崎九郎']);
        User::insert(['name' => '小村十郎']);
        User::insert(['name' => '佐藤一郎']);
        User::insert(['name' => '志村二郎']);
        User::insert(['name' => '須崎三郎']);
        User::insert(['name' => '瀬川四郎']);
        User::insert(['name' => '園部五郎']);
        User::insert(['name' => '田中六郎']);
        User::insert(['name' => '千田七郎']);
        User::insert(['name' => '槻山八郎']);
        User::insert(['name' => '手塚九郎']);
        User::insert(['name' => '戸田十郎']);
    }
}
