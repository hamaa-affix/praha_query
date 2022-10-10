<?php

namespace Database\Seeders;

use App\Models\CardPayment;
use App\Models\CashPayment;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $payments = Payment::all();

        for ($i = 0; $i < $users->count(); $i++) {
            switch ($users[$i]->payment_id) {
                case 1:
                    CardPayment::create(['payment_id' => $users[$i]->payment_id]);
                    break;
                case 2:
                    CashPayment::create(['payment_id' => $users[$i]->payment_id]);
                    break;
            }
        }
    }
}
