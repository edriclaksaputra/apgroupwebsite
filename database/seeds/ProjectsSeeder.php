<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//Main Project
        DB::table('projects')->insert([
        	'title'=>'Min Residences',
        	'categories_id'=>'1',
            'avatar'=>'style/images/projects/main/minresidences/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Under Construction',
            'gfa'=>'92,559.47 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'M Tower',
        	'categories_id'=>'1',
            'avatar'=>'style/images/projects/main/mtower/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Under Construction',
            'gfa'=>'63,755.97 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Bai Hotel',
        	'categories_id'=>'1',
            'avatar'=>'style/images/projects/main/baihotel/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Cebu, Philippines',
            'status'=>'Completed',
            'gfa'=>'39,381.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Lot 8',
        	'categories_id'=>'1',
            'avatar'=>'style/images/projects/main/lot8/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Cebu, Philippines',
            'status'=>'Completed',
            'gfa'=>'25,421.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Nanchang University Hospital',
        	'categories_id'=>'1',
            'avatar'=>'style/images/projects/main/nanchanguniversityhospital/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Nanchang, China',
            'status'=>'Under Construction',
            'gfa'=>'166,890.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'PSB Academy',
        	'categories_id'=>'1',
            'avatar'=>'style/images/projects/main/pbsacademy/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Singapore',
            'status'=>'Completed',
            'gfa'=>'8,157.63 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Yangon Central Station',
        	'categories_id'=>'1',
            'avatar'=>'style/images/projects/main/ycs/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Authority Submission',
            'gfa'=>'21,755.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'SIY Mixed Use Complex',
        	'categories_id'=>'1',
            'avatar'=>'style/images/projects/main/siymixedusecomplex/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Design Proposal',
            'gfa'=>'51,256.58 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Main Project

        //Hospitality
        DB::table('projects')->insert([
        	'title'=>'Hotel 101',
        	'categories_id'=>'2',
            'avatar'=>'style/images/projects/hospitality/hotelcebu/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Cebu, Philippines',
            'status'=>'Design Proposal',
            'gfa'=>'30,695.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Camotes Resort',
        	'categories_id'=>'2',
            'avatar'=>'style/images/projects/hospitality/camotesresort/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Cebu, Philippines',
            'status'=>'Design Proposal',
            'gfa'=>'126,492.56 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Pan Pacific Hotel',
        	'categories_id'=>'2',
            'avatar'=>'style/images/projects/hospitality/panpacific/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Singapore',
            'status'=>'Completed',
            'gfa'=>'4,361.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Martin Avenue & Ken Street',
        	'categories_id'=>'2',
            'avatar'=>'style/images/projects/hospitality/martinavenue/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Authority Submission',
            'gfa'=>'67,521.32 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Tag Metro Manila',
        	'categories_id'=>'2',
            'avatar'=>'style/images/projects/hospitality/tagmetromanila/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Manila, Philippines',
            'status'=>'Design Proposal',
            'gfa'=>'276,678.82 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Shangri-La Jiangsu',
        	'categories_id'=>'2',
            'avatar'=>'style/images/projects/hospitality/shangrilajiangsu/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Jiangsu, China',
            'status'=>'Completed',
            'gfa'=>'88,101.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Hospitality

        //Industrial
        DB::table('projects')->insert([
        	'title'=>'DEFU Industrial City',
        	'categories_id'=>'3',
            'avatar'=>'style/images/projects/industrial/defuindustrialcity/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Singapore',
            'status'=>'Under Construction',
            'gfa'=>'98,264.32 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'HG Metal Manufacturing',
        	'categories_id'=>'3',
            'avatar'=>'style/images/projects/industrial/hgmetal/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Singapore',
            'status'=>'Under Construction',
            'gfa'=>'20,098.65 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'SECOM BUILDING',
        	'categories_id'=>'3',
            'avatar'=>'style/images/projects/industrial/secombuilding/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Singapore',
            'status'=>'Completed',
            'gfa'=>'11,938.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Wajiawan Transport Hub',
        	'categories_id'=>'3',
            'avatar'=>'style/images/projects/industrial/wajiawantransporthub/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Suzhou, China',
            'status'=>'Design Development',
            'gfa'=>'47,321.87 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Industrial

        //Institutional
        DB::table('projects')->insert([
        	'title'=>'Meikarta University',
        	'categories_id'=>'4',
            'avatar'=>'style/images/projects/institutional/meikartauniversity/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Jakarta, Indonesia',
            'status'=>'Authority Submission',
            'gfa'=>'49,000.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Myanmar Engineering',
        	'categories_id'=>'4',
            'avatar'=>'style/images/projects/institutional/myanmarengineeringcouncil/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon',
            'status'=>'Completed – Competition 1st winner',
            'gfa'=>'9,051.83 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Tamwe General Hospital',
        	'categories_id'=>'4',
            'avatar'=>'style/images/projects/institutional/tamwegeneralhospital/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Completed',
            'gfa'=>'36,754.42 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Wuhan Metallurgical HQ',
        	'categories_id'=>'4',
            'avatar'=>'style/images/projects/institutional/wuhanmetallurgicalhq/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Wuhan, China',
            'status'=>'Design Development',
            'gfa'=>'47,321.87 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Institutional

        //Masterplaning + Landscape
        //Masterplaning + Landscape

        //Residential + Commercial
        DB::table('projects')->insert([
        	'title'=>'BBB Residences',
        	'categories_id'=>'6',
            'avatar'=>'style/images/projects/residentialcommercial/bbbresidences/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Design Proposal',
            'gfa'=>'62,731.00 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Bonamy Tower',
        	'categories_id'=>'6',
            'avatar'=>'style/images/projects/residentialcommercial/bonamytower/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Authority Submission',
            'gfa'=>'29,613.60 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Greenland Wujiang Lake',
        	'categories_id'=>'6',
            'avatar'=>'style/images/projects/residentialcommercial/greenlandwujianglake/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Wujiang, China',
            'status'=>'Design Development',
            'gfa'=>'121,236.25 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'M-Green Residences',
        	'categories_id'=>'6',
            'avatar'=>'style/images/projects/residentialcommercial/mgreenresidences/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Design Development',
            'gfa'=>'141,390.69 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Thakin Mya Park',
        	'categories_id'=>'6',
            'avatar'=>'style/images/projects/residentialcommercial/thakinmyapark/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Yangon, Myanmar',
            'status'=>'Design Development',
            'gfa'=>'83,489.21 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('projects')->insert([
        	'title'=>'Wuhu City Complex',
        	'categories_id'=>'6',
            'avatar'=>'style/images/projects/residentialcommercial/wuhucitycomplex/banner.jpg',
            'description'=>'',
            'date'=>'',
            'location'=>'Wuhu, China',
            'status'=>'Design Development',
            'gfa'=>'216,398.85 sqm',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Residential + Commercial
    }
}
