<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User as User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user')->delete();
      $faker = Faker::create();
      for ($i=0; $i < 50; $i++)
      {
        User::create([
          'name' => $faker->name,
          'username' => $faker->userName,
          'address' => $faker->address,
          'phone' => $faker->phoneNumber,
          'website' => $faker->url,
          'company' => $faker->company
        ]);
      }
    }
}
