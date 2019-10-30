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
        'mBirthday'=>Str::random(8),
        'mEmail'=>Str::random(10).'@gmail.com',
        'mPhone'=>Str::random(10),
        'fid'=>Str::random(10),
        'mType'=>0,
        
]);
        //
    }
}
