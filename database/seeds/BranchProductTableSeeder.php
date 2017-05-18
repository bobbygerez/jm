<?php

use Illuminate\Database\Seeder;
use App\Branch;

class BranchProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 200; $i++) { 
        	
        	$branch = Branch::find( rand(1,30));
        	
        	$branch->products()->attach([

        		'branch_id' => $branch->id,
        		'product_id' => rand(1, 200)

        	]);
        }
        
    }
}
