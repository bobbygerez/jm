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
        
        $roles = [

        'CEO/Owner', 'Manager', 'Finance Officer', 'Audit Officer',
        'Inventory Manager', 'System Admin', 'Cashier', 'Validator',
        'Merchandiser', 'Delivery Personnel', 'Customer', 'Beneficiary'

        ];

        foreach ($roles as $role) {
            
            Role::create([

                    'name' => $role
                    
                ]);
        }

    }
}
