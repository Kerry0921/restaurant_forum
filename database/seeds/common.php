<?php

use Illuminate\Database\Seeder;

class common extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('common')->insert([
        'fid'=>Str::random(10),
        'mid'=>Str::random(10),
        'rid'=>Str::random(10),
        'common'=>Str::random(10),
        'point'=>Str::random(10),
]);
        

  //
    }
}
