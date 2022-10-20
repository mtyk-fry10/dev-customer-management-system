<?php

use Illuminate\Database\Seeder;
use App\Models\Customer; // 追加
use Faker\Factory; // 追加

class CustomersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // テーブルをリセット
        DB::table('customers')->delete();
        // 日本語設定
        $faker = Factory::create('ja_JP');
        // サンプルデータ挿入
        for($i = 0; $i < 10; $i++) {
            Customer::create([
                'name'    => $faker->name(),
                'address' => $faker->address(),
                'tel'     => $faker->phoneNumber(),
                'email'   => $faker->email()
            ]);
        }
    }
}
