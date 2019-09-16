<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name'=>'Main Projects',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
        	'name'=>'hospitality',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
        	'name'=>'industrial',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
        	'name'=>'institutional',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
        	'name'=>'masterplanning',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
        	'name'=>'residential',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
