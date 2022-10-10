<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\User;
use App\Models\CardPayment;
use App\Models\CashPayment;
use Illuminate\Support\Carbon;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $lists = [
            [
                'id' => 1,
                'created_at' => $now
            ],
            [
                'id' => 2,
                'created_at' => $now
            ]
        ];

        Payment::insert($lists);
    }
}
