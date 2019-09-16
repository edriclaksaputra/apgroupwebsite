<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
        	'name'=>'Liew Shoong Shoon',
        	'role'=>'Founder & Principle',
        	'avatar'=>'style/images/staff/LSS_1.png',
        	'biografi'=>'Liew Soong Shoon graduated with Honours in Bachelor of Arts (Architecture Studies), Bachelor of Architecture, and Master of Urban Design from National of University Singapore. He was worked at Liwellyn Davies (HK) Architects & Planners in Hong Kong and Conrad & Gargett Architects in Brisbane Australia.
        	In 1997, he established A+P Group where his vision is to provide comprehensive approach consultancy services, which believes in quality and excellence in design and planning. He is a member of some professional council such as Singapore Institute of Architects (SIA), Royal Institute of British Architects (RIBA), Registered at Singapore Board of Architects, and APEC Architects.
        	Nowadays, a+p is constantly establishing itself as an energetic and innovative consultancy firm. a+p believes in team and expertise involvement, technological advancement in handling design and planning problems via the critical & analytical process in facing design challenge and potential. a+p seeks to achieve the most effective, innovative, functional and quality design solutions.',
        	'facebook'=>'',
        	'instagram'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('staff')->insert([
        	'name'=>'Jack Chen',
        	'role'=>'DIRECTOR',
        	'avatar'=>'style/images/staff/Jack.png',
        	'biografi'=>'',
        	'facebook'=>'',
        	'instagram'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('staff')->insert([
        	'name'=>'Mi Mi Swee',
        	'role'=>'MANAGING PARTNER',
        	'avatar'=>'style/images/staff/mimi.png',
        	'biografi'=>'',
        	'facebook'=>'',
        	'instagram'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('staff')->insert([
        	'name'=>'Kelvin Wang',
        	'role'=>'DIRECTOR',
        	'avatar'=>'style/images/staff/kelvin.png',
        	'biografi'=>'',
        	'facebook'=>'',
        	'instagram'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('staff')->insert([
        	'name'=>'Antonius Khierawan',
        	'role'=>'ASSOCIATE',
        	'avatar'=>'style/images/staff/antonius.png',
        	'biografi'=>'',
        	'facebook'=>'',
        	'instagram'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('staff')->insert([
        	'name'=>'Darren Neil Cayoca',
        	'role'=>'ASSOCIATE',
        	'avatar'=>'style/images/staff/Darren.png',
        	'biografi'=>'',
        	'facebook'=>'',
        	'instagram'=>'',
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
