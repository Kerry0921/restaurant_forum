<?php

use Illuminate\Database\Seeder;

class restaurant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('common')->insert([
        'mid'=>"1",
        'rid'=>"1",
        'common'=>"1",
        'point'=>"1",
]);
        

  //
    }
}
