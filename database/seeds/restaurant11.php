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
      DB::table('restaurant')->insert([
        'rName'=>Str::random(3),
        'rDescription'=>Str::random(15),
        'rBHour'=>Str::random(2),
        'rOffer'=>Str::random(3),
        'rAddress'=>"高雄市鳳山區五甲二路157號",
        'rPhoto'=>Str::random(10),
        'mid'=>Str::random(10),
        'rType'=>"2",
]);
        

  //
    }
}
