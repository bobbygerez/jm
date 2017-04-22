<?php

use Illuminate\Database\Seeder;
use App\User;
use App\MainCategory;
use App\MerchantCategory;
use App\MerchantSubcategory;
use App\Product;
use App\Unit;
use App\Photo;
use App\ProductPrice;
use App\Role;

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

        $product = new Product();
        $product->merchantSubcategory()->detach();
        $product->mainCategory()->detach();
        
		User::truncate();
        MainCategory::truncate();
        MerchantCategory::truncate();
        MerchantSubcategory::truncate();
        Unit::truncate();
        Product::truncate();
        Photo::truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        for ($i=1; $i < 10 ; $i++) { 
         	
        	 $user = User::create([

        	 		'name' => $faker->name,
        	 		'email' => $faker->email,
        	 		'password' => Hash::make(1234)

        	 	]);

             $user->roles()->attach($user->id, [
                    'role_id' => rand(1,7)
                ]);

            $unit = Unit::create([
                'user_id' => $user->id,
                'name' => $faker->word

            ]);


            for ($xy=0; $xy < 2; $xy++) { 

                $maincategory = MainCategory::create([

                    'user_id' => $user->id,
                    'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                    'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                ]);


                    for( $ab=0; $ab < 5; $ab++){

                            $merchantcategory =  MerchantCategory::create([

                                'user_id' => $user->id,
                                'maincategory_id' => $maincategory->id,
                                'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                                'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                            ]);

                            
                            for($abc=0; $abc < 5; $abc++){

                                $merchantSubcategory = MerchantSubcategory::create([

                                        'user_id' => $user->id,
                                        'merchant_category_id' => $merchantcategory->id,
                                        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                                        'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                                    ]);

                                 $product =  Product::create([
                                    'user_id' => $user->id,
                                    'name' => $faker->word,
                                    'model_number' => $faker->isbn13,
                                    'unit_id' => $unit->id,
                                    'desc' => $faker->text($maxNbChars = 100),
                                    'discount' => $faker->numberBetween(1, 99)


                                ]);

                                 if($abc === 0){

                                        Photo::create([

                                            'path' => 'images/uploads/' . rand(1,67) . '.jpg',
                                            'imageable_id' => $product->id,
                                            'imageable_type' => 'App\Product',
                                            'is_primary' => 1

                                        ]);

                                         ProductPrice::create([
                                            'product_id' => $product->id,
                                            'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000),
                                            'is_primary' => 1
                                        ]);
                                    }
                                    else{

                                        Photo::create([

                                            'path' => 'images/uploads/' . rand(1,67) . '.jpg',
                                            'imageable_id' => $product->id,
                                            'imageable_type' => 'App\Product',
                                            'is_primary' => 0

                                        ]);

                                        ProductPrice::create([
                                            'product_id' => $product->id,
                                            'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000),
                                            'is_primary' => 0
                                        ]);
                                    }

                                $myProduct = Product::find($product->id);
                                $maincategory->products()->attach($maincategory->id, ['product_id' => $product->id]);

                                $merchantcategory->products()->attach($merchantcategory->id, ['product_id' => $product->id]);
                                $myProduct->merchantSubcategory()->attach($product->id, ['merchant_subcategory_id' => $merchantSubcategory->id ]);

                                

                                    
                                

                            } /** END LOOP $abc **/
                                 

                    } /** END LOOP $ab **/
                    


            } /** END LOOP $xy **/
             

        } /** END LOOP $i **/
    }
}
