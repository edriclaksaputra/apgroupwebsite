<?php

use Illuminate\Database\Seeder;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Bai Hotel
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\1.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\2.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\3.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\4.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\5.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\6.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\7.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\8.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\9.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'3',
        	'photo'=>'style\images\projects\main\baihotel\10.jpg'
        ]);
        //Bai Hotel

        //Lot 8
        DB::table('photos')->insert([
        	'project_id'=>'4',
        	'photo'=>'style\images\projects\main\lot8\3.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'4',
        	'photo'=>'style\images\projects\main\lot8\4.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'4',
        	'photo'=>'style\images\projects\main\lot8\5.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'4',
        	'photo'=>'style\images\projects\main\lot8\6.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'4',
        	'photo'=>'style\images\projects\main\lot8\1.jpg'
        ]);
        DB::table('photos')->insert([
        	'project_id'=>'4',
        	'photo'=>'style\images\projects\main\lot8\2.jpg'
        ]);
        //Lot 8

        //Min Residence
        DB::table('photos')->insert([
            'project_id'=>'1',
            'photo'=>'style\images\projects\main\minresidences\1.jpg'
        ]);
        DB::table('photos')->insert([
            'project_id'=>'1',
            'photo'=>'style\images\projects\main\minresidences\2.jpg'
        ]);
        DB::table('photos')->insert([
            'project_id'=>'1',
            'photo'=>'style\images\projects\main\minresidences\3.jpg'
        ]);
        DB::table('photos')->insert([
            'project_id'=>'1',
            'photo'=>'style\images\projects\main\minresidences\4.jpg'
        ]);
        //Min Residence

        //M Tower
        DB::table('photos')->insert([
            'project_id'=>'1',
            'photo'=>'style\images\projects\main\mtower\1.jpg'
        ]);
        DB::table('photos')->insert([
            'project_id'=>'1',
            'photo'=>'style\images\projects\main\mtower\2.jpg'
        ]);
        DB::table('photos')->insert([
            'project_id'=>'1',
            'photo'=>'style\images\projects\main\mtower\3.jpg'
        ]);
        DB::table('photos')->insert([
            'project_id'=>'1',
            'photo'=>'style\images\projects\main\mtower\4.jpg'
        ]);
        //M Tower
    }
}
