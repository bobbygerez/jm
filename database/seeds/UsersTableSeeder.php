<?php

use Illuminate\Database\Seeder;
use App\User;
use App\MainCategory;
use App\MerchantCategory;
use App\MerchantSubcategory;
use App\Product;
use App\Unit;

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
        MerchantCategory::truncate();
        MerchantSubcategory::truncate();
        Unit::truncate();
        Product::truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        for ($i=1; $i < 10 ; $i++) { 
         	
        	 $user = User::create([

        	 		'name' => $faker->name,
        	 		'email' => $faker->email,
        	 		'password' => Hash::make(1234)

        	 	]);

             $maincategory = MainCategory::create([

                    'user_id' => $user->id,
                    'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                    'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                ]);

                for($x=0; $x < 7; $x++){

                    $merchantcategory =  MerchantCategory::create([

                        'user_id' => $user->id,
                        'maincategory_id' => $maincategory->id,
                        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                        'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                    ]);

                     for($y=0; $y < 5; $y++){
                 
                         $merchantSubcategory = MerchantSubcategory::create([

                                'user_id' => $user->id,
                                'merchant_category_id' => $merchantcategory->id,
                                'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                                'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                            ]);
                        }
             
                }
             
               


            $unit = Unit::create([

                'name' => $faker->word

            ]);

             Product::create([

                    'user_id' => $user->id,
                    'name' => $faker->word,
                    'merchantcategory_id' => $merchantcategory->id,
                    'merchant_subcategory_id' => $merchantSubcategory->id,
                    'model_number' => $faker->isbn13,
                    'unit_id' => $unit->id,
                    'desc' => $faker->text($maxNbChars = 100),
                    'discount' => $faker->numberBetween(1, 99)


                ]);



         } 
    }
}
