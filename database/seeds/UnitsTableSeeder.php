<?php

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		Unit::truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		
    	for ($i=0; $i < 20 ; $i++) { 

    		Unit::create([

        		'name' => $faker->word

        	]);
    	}
        
    }
}
