<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::create([
            'name' => 'New York',
            'info' => 'Home to our original flagship, Iron Anchor stands out among gyms in New York City and the greater metropolitan area, each club is a reflection of its surroundings, as well as a peaceful sanctuary from the chaos outside. New York provides members with an inviting and exhilarating fitness experience that’s truly unrivaled. Find luxury fitness locations in New York near you!',
            'picture_path' => 'nyc-gym.png',
        ])->save();

        State::create([
            'name' => 'Florida',
            'info' => 'From the pulsing energy of South Beach to the serenity of Coral Gables, discover a Miami-area fitness experience designed to pamper the body and mind. Our Florida fitness clubs offer innovative conscious movement classes, world-class personal training, luxurious spas and exclusive boutiques - creating environments that motivate and inspire.',
            'picture_path' => 'florida-image.png',
        ])->save();

        State::create([
            'name' => 'California',
            'info' => 'Spend an afternoon soaking on the sun deck at West Hollywood, or refuel with healthy cuisine at one of our exclusive Equinox Sports Club restaurants. From the O.C. to the Valley, each of these Southern California fitness clubs is inspired by the breathtaking landscapes and distinctive architecture of L.A. and its surroundings. Check out our Southern California fitness locations below.',
            'picture_path' => 'la-gym.png',
        ])->save();

        State::create([
            'name' => 'Chicago',
            'info' => 'Spacious and serene, each Chicago fitness club defines luxury and well-being while absorbing the cultural feel of its surrounding neighborhood. From expert personal trainers and innovative group fitness classes to soothing spa treatments and carefully curated boutiques, the urban and suburban wellness experiences at our luxury gyms in Chicago are powered by a holistic approach to living.',
            'picture_path' => 'chicago-image.png',
        ])->save();
    }
}
