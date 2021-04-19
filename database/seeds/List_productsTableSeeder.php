<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class List_productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_products')->insert([
            'list_product_name' => 'shoes',
            'list_product_value' => '40',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('list_products')->insert([
            'list_product_name' => 't-shirt',
            'list_product_value' => '50',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('list_products')->insert([
            'list_product_name' => 'pants',
            'list_product_value' => '80',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('list_products')->insert([
            'list_product_name' => 'glasses',
            'list_product_value' => '120',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('list_products')->insert([
            'list_product_name' => 'shorts',
            'list_product_value' => '20',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
