<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      for($i = 0; $i < 40; $i++)
      {
        Item::create([
          'title' => $faker->name,
        ]);
      }
    }
}
