<?php

use Illuminate\Database\Seeder;
use App\Franchise;

class FranchiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=1; $i < 112; $i++) { 
        	Franchise::create([

        		'created_by' => $i,
        		'trade_id' => $i,
        		'name' => $faker->company,
        		'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)

        	]);
        }
        
    }
}
