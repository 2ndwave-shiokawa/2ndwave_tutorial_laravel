<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'name'     => 'エミリア・クラーク',
                'email'    => 'emilia@2ndwave.jp',
                'password' => Hash::make('emilia'),
            ],
            [
                'name'     => 'モーガン・フリーマン',
                'email'    => 'morgan@2ndwave.jp',
                'password' => Hash::make('morgan'),
            ],
            [
                'name'     => 'ジム・キャリー',
                'email'    => 'jim@2ndwave.jp',
                'password' => Hash::make('jim'),
            ],
        ]);

        foreach($users as $user) {
            User::create($user);
        }
    }
}