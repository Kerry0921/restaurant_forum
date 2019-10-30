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
        'rFavorite'=>Str::random(10),
        'category'=>Str::random(2),
        'rDescription'=>Str::random(15),
        'rBHour'=>Str::random(10),
        'rOffer'=>Str::random(10),
        'rAddress'=>Str::random(10),
        'rName'=>Str::random(3),
        'rPhoto'=>Str::random(10),
        'mid'=>Str::random(10),
]);
        

  //
    }
}
