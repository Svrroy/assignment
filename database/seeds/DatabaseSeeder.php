<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('restaurants')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'mobile'=> $faker->phoneNumber,
                'address' => $faker->streetAddress,
                'description'=>$faker->paragraph,
                'image'=>'https://source.unsplash.com/random',

            ]);
        }
    }
}
