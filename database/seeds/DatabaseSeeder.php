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
use App\PersonalData;
use App\CardNo;
use App\AccessRight;
use App\MaritalStatus;
use App\Brand;
use App\Position;
use App\Policy;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
        CardNo::truncate();
        PersonalData::truncate();
        MaritalStatus::truncate();
        AccessRight::truncate();
        Brand::truncate();
        Position::truncate();
        Policy::truncate();
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(RolesTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(MaritalStatusTableSeeder::class);
        $this->call(UnitTableSeeder::class);
        $this->call(AccessRightTableSeeder::class);
        $this->call(BrandTableSeeder::class);

        factory(App\CardNo::class)->create();
        factory(App\User::class, 30)->create();
        factory(App\MerchantSubcategory::class)->create();
        factory(App\Product::class, 30)->create();
        factory(App\Merchant::class, 30)->create();
        factory(App\Branch::class, 30)->create();
        factory(App\Photo::class, 200)->create();
        factory(App\Price::class)->create();


        $this->call(PositionsTableSeeder::class);
        $this->call(BranchProductTableSeeder::class);
        $this->call(MerchantUserTableSeeder::class);
        $this->call(BranchMerchantTableSeeder::class);
        $this->call(BranchUserTableSeeder::class);
        $this->call(PolicyTableSeeder::class);
        $this->call(ProductPriceTableSeeder::class);
        $this->call(ProductQuantityTableSeeder::class);
        $this->call(MainFunctionsTableSeeder::class);

    }
}
