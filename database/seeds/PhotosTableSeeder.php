<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Photo::truncate();

        for ($i=0; $i < 60; $i++) { 
        	
        	Photo::create([

        			'path' => 'images/uploads/' . $i . '.jpg',
        			'imageable_id' => rand(1, 60),
        			'imageable_type' => 'App\Product'

        		]);
        }
    }
}
