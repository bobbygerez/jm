<?php

use Illuminate\Database\Seeder;
use App\Trade;

class TradeTableSeeder extends Seeder
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
        	Trade::create([

        		'created_by' => $i,
                'merchant_id' => rand(1, 60),
                'for_franchise' => rand(0, 1),
        		'name' => $faker->company,
        		'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)

        	]);
        }
        
    }
}
