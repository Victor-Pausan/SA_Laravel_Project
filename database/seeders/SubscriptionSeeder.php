<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::create([
            'type' => 'Basic Membership',
            'price' => 59,
        ])->save();

        Subscription::create([
            'type' => 'Premium Membership',
            'price' => 89,
        ])->save();
    }
}
