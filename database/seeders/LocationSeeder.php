<?php

namespace Database\Seeders;

use App\Models\GymLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GymLocation::create([
            'state_id' => '1',
            'address' => '54 Murray Street New York, NY 10007',
            'name' => 'Tribeca',
            'picture_path' => 'nyc-gym.png'
        ])->save();

        GymLocation::create([
            'state_id' => '2',
            'address' => '25 SW 9th Street Miami, FL 33131',
            'name' => 'Brickell Heights',
            'picture_path' => 'florida-image.png'
        ])->save();

        GymLocation::create([
            'state_id' => '2',
            'address' => 'Collins Avenue Miami Beach, FL 33139',
            'name' => 'South Beach',
            'picture_path' => 'south-beach.png'
        ])->save();

        GymLocation::create([
            'state_id' => '3',
            'address' => '8590 Sunset Blvd West Hollywood, CA 90069',
            'name' => 'West Hollywood',
            'picture_path' => 'la-gym.png'
        ])->save();

        GymLocation::create([
            'state_id' => '4',
            'address' => '900 North Michigan Chicago, IL 60611',
            'name' => 'Gold Coast',
            'picture_path' => 'gold-coast.png'
        ])->save();

        GymLocation::create([
            'state_id' => '1',
            'address' => '14 Wall Street New York, NY 10005',
            'name' => 'Wall Street',
            'picture_path' => 'wall-street.png'
        ])->save();
    }
}
