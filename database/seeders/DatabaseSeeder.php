<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Database\Seeders\TaxRateTableSeeder;
use Database\Seeders\PaymentTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\PaymentMethodTableSeeder;
use Database\Seeders\ProductTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TaxRateTableSeeder::class,
            PaymentTableSeeder::class,
            UserTableSeeder::class,
            PaymentMethodTableSeeder::class,
            ProductTableSeeder::class
        ]);
    }
}
