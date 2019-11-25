<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class favorite extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorite')->insert([

        'fid'=>Str::random(10),
        'mid'=>Str::random(10),
	    'rid'=>Str::random(10),
        
]);
        //
    }
}
