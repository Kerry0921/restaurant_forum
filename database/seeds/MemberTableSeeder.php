<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->insert([

        'mName'=>Str::random(10),
        'Email'=>Str::random(10).'@gmail.com',
        'Phone'=>Str::random(10),
	'password'=>Str::random(10),
        'mType'=>0,
        
]);
        //
    }
}
