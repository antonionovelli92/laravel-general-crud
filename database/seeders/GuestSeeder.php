<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Guest;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 6 ; $i++) { 
            $new_guest = new  Guest();
            $new_guest->name = $faker->name();
            $new_guest->surname = $faker->name();
            $new_guest->born = $faker->date('Y_m_d');
            $new_guest->gender = $faker->randomElement(['M', 'F']);
            $new_guest->age = $faker->numberBetween(0, 80);
            $new_guest->birth_place = $faker->city();
            $new_guest->CF = $faker->word();
            $new_guest->doc_number = $faker->randomNumber(6, false);
            $new_guest->printing_date = $faker->date('Y_m_d');
            $new_guest->piastrine = $faker->randomFloat(1, 20, 30);
            $new_guest->GB = $faker->randomFloat(1, 20, 30);
            $new_guest->GR = $faker->randomFloat(1, 20, 30);
            $new_guest->EMO = $faker->randomFloat(1, 20, 30);
            $new_guest->EMA = $faker->randomFloat(1, 20, 30);
            $new_guest->VCM = $faker->randomFloat(1, 20, 30);
            $new_guest->CCM = $faker->randomFloat(1, 20, 30);
            $new_guest->CMC = $faker->randomFloat(1, 20, 30);
            $new_guest->AMD = $faker->randomFloat(1, 20, 30);
            $new_guest->VMP = $faker->randomFloat(1, 20, 30);
            $new_guest->EMI = $faker->randomFloat(1, 20, 30);
            $new_guest->ALT = $faker->randomFloat(1, 20, 30);
            
            $new_guest->save();
        }
    }
}
