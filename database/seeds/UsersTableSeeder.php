<?php

use Illuminate\Database\Seeder;
use App\User;
use App\MainCategory;
use App\MerchantCategory;
use App\MerchantSubcategory;
use App\Product;
use App\Unit;
use App\Photo;
use App\Price;
use App\Role;
use App\Branch;
use App\Merchant;

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
        Photo::truncate();
        Price::truncate();
        Branch::truncate();
        Merchant::truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        for ($i=1; $i < 10 ; $i++) { 

             $name = explode(' ', $faker->name);
         	
        	 $user = User::create([

        	 		'firstname' => $name[0],
                    'lastname' => $name[1],
        	 		'email' => $faker->email,
                    'status' => rand(0,1),
        	 		'password' => Hash::make(1234)

        	 	]);

             $user->roles()->attach($user->id, [
                    'role_id' => rand(1,7)
                ]);

            $unit = Unit::create([
                'user_id' => $user->id,
                'name' => $faker->word

            ]);

            $merchant = Merchant::create([

                    'created_by' => $user->id,
                    'name' => $faker->company,
                    'email' => $faker->email,
                    'website' => 'http://www.'.$faker->domainName,
                    'phone_no' => $faker->tollFreePhoneNumber,
                    'mobile_no' => $faker->e164PhoneNumber

                ]);

            

            for ($xy=0; $xy < 2; $xy++) { 

                $maincategory = MainCategory::create([

                    'user_id' => $user->id,
                    'name' => $faker->word . ' ' . $faker->word,
                    'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                ]);

                $branch = Branch::create([
                    'merchant_id' => $merchant->id,
                    'created_by' => $user->id,
                    'phone_no' => $faker->tollFreePhoneNumber,
                    'mobile_no' => $faker->e164PhoneNumber,

                ]);

                 $newBranchMerchant = Branch::find($branch->id);
                


                    for( $ab=0; $ab < 5; $ab++){

                            $merchantcategory =  MerchantCategory::create([

                                'user_id' => $user->id,
                                'maincategory_id' => $maincategory->id,
                                'name' => $faker->word . ' ' . $faker->word,
                                'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                            ]);


                            for($abc=0; $abc < 5; $abc++){

                                $merchantSubcategory = MerchantSubcategory::create([

                                        'user_id' => $user->id,
                                        'merchant_category_id' => $merchantcategory->id,
                                        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                                        'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true)
                                    ]);

                                for($abcd=0; $abcd < 2; $abcd++){
                                 $product =  Product::create([
                                    'user_id' => $user->id,
                                    'merchant_subcategory_id' => $merchantSubcategory->id,
                                    'name' => $faker->word . ' ' . $faker->word,
                                    'model_number' => $faker->isbn13,
                                    'unit_id' => $unit->id,
                                    'desc' => $faker->text($maxNbChars = 100),
                                    'discount' => $faker->numberBetween(1, 99)


                                ]);

                                 $newBranchMerchant->products()->attach($branch->id, [

                                        'product_id' => $product->id

                                    ]);

                                  

                                        Photo::create([

                                            'path' => 'images/uploads/' . rand(1,67) . '.jpg',
                                            'imageable_id' => $product->id,
                                            'imageable_type' => 'App\Product',
                                            'is_primary' => 1

                                        ]);

                                         Price::create([
                                            'product_id' => $product->id,
                                            'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000),
                                            'is_primary' => 1
                                        ]);
                                    


                                
                                 } /** END LOOP $abcd **/
                                    
                                

                            } /** END LOOP $abc **/
                                 

                    } /** END LOOP $ab **/
                    


            } /** END LOOP $xy **/
             

        } /** END LOOP $i **/
    }
}
