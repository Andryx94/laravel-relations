<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Cover;

class CoversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 5 ; $i++) {
        $new_song = new Cover();
        $new_song->album_id = $i + 1;
        $new_song->url = $faker->imageUrl($width = 300, $height = 300);
        $new_song->save();
      }
    }
}
