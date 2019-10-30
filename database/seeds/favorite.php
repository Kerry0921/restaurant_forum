<?php

use Illuminate\Database\Seeder;

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
     'rid'=>Str::random(10)
]);
        //
    }
}
