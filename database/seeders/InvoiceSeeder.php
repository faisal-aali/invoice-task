<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;
use Faker\Factory as Faker;

class InvoiceSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            Invoice::create([
                'amount' => $faker->randomFloat(2, 100, 1000),
                'invoice_number' => 'INV-' . strtoupper($faker->bothify('??###')),
                'customer_email' => $faker->unique()->safeEmail,
                'status' => $faker->randomElement(['Draft', 'Outstanding', 'Paid']),
            ]);
        }
    }
}
