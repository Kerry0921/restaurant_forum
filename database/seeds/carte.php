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
      'rid'=>Str::random(10),
      'cName'=>Str::random(10),
      'cprice'=> FLOOR(RAND()*10),
      'cRecommend'=>Str::random(10),
      'cDescription'=>Str::random(10),

]); 
  //
    }
}
