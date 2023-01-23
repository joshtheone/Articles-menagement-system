<?php 
namespace DB\seeder;

use App\Models\Accounts;
use App\Models\product_units;
use App\Models\productCategory;
use App\Models\shopCategory;
use App\Models\users;
use DB;

class seeder{
    public function seed(){
        $users = new users;

        $users->insert([
            "name"=>"Admin",
            "user"=>"admin@gmail.com",
            "store"=>"",
            "password"=>password_hash("87654321",PASSWORD_DEFAULT),
            "lever"=>"Adminstrator",
            "remember me"=>""
        ]);

        $product_unit = new product_units();

        $product_unit->insert([
            'unit'=>'Litter'
        ]);

        $product_unit->insert([
            'unit'=>'Kgs'
        ]);

        $product_unit->insert([
            'unit'=>'boxes'
        ]);

        $product_unit->insert([
            'unit'=>'bottles'
        ]);

        $product_unit->insert([
            'unit'=>'plates'
        ]);

        $product_unit->insert([
            'unit'=>'payer'
        ]);

        $product_unit->insert([
            'unit'=>'set'
        ]);

        $product_unit->insert([
            'unit'=>'dozen'
        ]);

        $product_unit->insert([
            'unit'=>'ft'
        ]);

        $product_unit->insert([
            'unit'=>'metter'
        ]);


        $productCategory = new productCategory();
        $shopcategory = new shopCategory();

        $shopCarts = [
            "other",
            "farmers",
            "restaurant",
            "hardware"
        ];

        $productCarts = [
            "medical",
            "food",
            "bevelage",
            "other"
        ];

        foreach ($shopCarts as $key => $value) {
            $shopcategory->insert([
                "category"=>$value
            ]);
        }

        foreach ($productCarts as $key => $value) {
            $productCategory->insert([
                "shopCategory"=>1,
                "category"=>$value
            ]);
        }
    }
}