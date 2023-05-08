<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {
        for ($i = 0; $i <= 100; $i++) {

            $newTrain = new train();
            $newTrain->company = $faker->randomElement(['Trenitalia', 'FrecciaRossa', 'InterCity', '9 3/4']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeInInterval('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeInInterval('-1 week', '+1 week');
            $newTrain->train_code = $faker->lexify('?????');
            $newTrain->carriages_number = $faker->numberBetween(1, 50);
            $newTrain->on_time = $faker->numberBetween(0, 1);
            $newTrain->cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
       

