<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductQuantityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 400; $i++) { 
        	
        	$product = Product::find(rand(1, 200));
        	$product->quantities()->create([

        			'product_id' => rand(1, 200),
        			'qty' => rand(1, 30)

        		]);
        }
    }
}
