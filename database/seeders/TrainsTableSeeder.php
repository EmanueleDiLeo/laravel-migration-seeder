<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<10; $i++){
            $train = new Train();
            $train->agency = $faker->words(1,true);
            $train->departure_date = $faker->dateTime();
            $train->arrival_date = $faker->dateTime();
            $train->departure_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->train_code = $faker->randomNumber(5, false);
            $train->number_carriages = $faker->numberBetween(1, 20);
            $train->isTime = $faker->boolean();
            $train->isDelete = $faker->boolean();

            $train->save();
        }
    }
}
