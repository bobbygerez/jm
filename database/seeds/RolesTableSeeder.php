<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Role::truncate();
        Role::create([ 'name' => 'Juan Merkado Admin']);
        Role::create([ 'name' => 'Juan Merkado Validator']);
        Role::create([ 'name' => 'Juan Merkado Delivery']);
        Role::create([ 'name' => 'Merchant Admin']);
        Role::create([ 'name' => 'Merchant Validator']);
        Role::create([ 'name' => 'Merchant Delivery']);
        Role::create([ 'name' => 'Client']);

    }
}
