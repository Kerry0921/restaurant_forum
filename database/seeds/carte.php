<?php

use Illuminate\Database\Seeder;

class carte extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('carte')->insert([
        'rid'=>"1",
        'cName'=>"1",
        'cprice'=>"1",
        'cRecommend'=>"1",
        'cDescription'=>"1",
]);
        

  //
    }
}
