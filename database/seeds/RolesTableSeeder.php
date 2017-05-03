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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        Role::create([ 'name' => 'JMAdmin']);
        Role::create([ 'name' => 'JMValidator']);
        Role::create([ 'name' => 'JMDelivery']);
        Role::create([ 'name' => 'MAdmin']);
        Role::create([ 'name' => 'MValidator']);
        Role::create([ 'name' => 'MDelivery']);
        Role::create([ 'name' => 'Client']);

    }
}
