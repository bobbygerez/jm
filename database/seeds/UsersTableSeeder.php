<?php

use Illuminate\Database\Seeder;
use App\User;
use App\MainCategory;
use App\MerchantCategory;
class UsersTableSeeder extends Seeder
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
		User::truncate();
        MainCategory::truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        for ($i=1; $i < 25 ; $i++) { 
         	
        	 $user = User::create([

        	 		'name' => $faker->name,
        	 		'email' => $faker->email,
        	 		'password' => Hash::make(1234)

        	 	]);

             $merchant = MainCategory::create([

                    'user_id' => $user->id,
                    'name' => $faker->word,
                    'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                ]);

             MerchantCategory::create([

                    'user_id' => $user->word,
                    'maincategory_id' => $merchant->id,
                    'name' => $faker->word,
                    'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                ]);


         } 
    }
}
