<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'Name' => 'Laptop1',
        	'Price' => '999',
        	'Description' => str_random('key', 50),
        	'category_id' => '1',
        ]);
		DB::table('products')->insert([
        	'Name' => 'Laptop2',
        	'Price' => '1999',
        	'Description' => str_random('key', 50),
        	'category_id' => '2',
        ]);
		DB::table('products')->insert([
        	'Name' => 'Laptop3',
        	'Price' => '2999',
        	'Description' => str_random('key', 50),
        	'category_id' => '3',
        ]);
        DB::table('products')->insert([
        	'Name' => 'Laptop4',
        	'Price' => '3999',
        	'Description' => str_random('key', 50),
        	'category_id' => '4',
        ]);
        DB::table('products')->insert([
        	'Name' => 'Laptop5',
        	'Price' => '4999',
        	'Description' => str_random('key', 50),
        	'category_id' => '5',
        ]);
    }
}
