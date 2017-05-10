<?php

use Illuminate\Database\Seeder;
use App\Unit;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $units = [

        	'pcs', 'kgs', 'box', 'pack'
        ];

        foreach ($units as $unit) {
        	
        	Unit::create([

        			'name' => $unit

        		]);
        }
    }
}
