<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('categories')->insert([
		'category_name' => 'Category 1',
		]);
		DB::table('categories')->insert([
		'category_name' => 'Category 2',
		]);
		DB::table('categories')->insert([
		'category_name' => 'Category 3',
		]);
		DB::table('categories')->insert([
		'category_name' => 'Category 4',
		]);
		DB::table('categories')->insert([
		'category_name' => 'Category 5',
		]);
    }
}
