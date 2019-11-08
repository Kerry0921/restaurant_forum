<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(MemberTableSeeder::class);
      $this->call(restaurant::class);
      $this->call(favorite::class);
      $this->call(carte::class);


        // $this->call(UsersTableSeeder::class);
    }
}
