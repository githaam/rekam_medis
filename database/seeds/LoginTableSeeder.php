<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for ($i=0; $i < 10; $i++)
      {
        DB::table('login')->insert([
            'username' => $faker -> userName,
            'password' => $faker -> password,
            'level' => $faker -> randomElement($array = array('admin','dokter','operator')),
        ]);
      }
    }
}
