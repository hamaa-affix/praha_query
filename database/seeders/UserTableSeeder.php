<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'payment_id' => 1,
            'name' => 'hoge太郎',
            'email' => 'hgoe@hoge.com',
            'email_verified_at' => now(),
            'password' => Hash::make('hogehoge')
        ];

        User::create($user);
        User::factory(5)->create();
    }
}
