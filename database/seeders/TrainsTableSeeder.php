<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time($format = 'H:i:s', $max = 'now'),
                'arrival_time' => $faker->time($format = 'H:i:s', $max = 'now'),
                'train_code' => $faker->bothify('??###'),
                'number_of_carriages' => $faker->numberBetween(5, 15),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
            ]);
        }
    }
}
