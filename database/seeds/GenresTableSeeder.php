<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $genres = ['pop','jazz','rock','blues','country','reggae','classic','rap'];

      foreach ($genres as $genre) {
        $new_song = new Genre();
        $new_song->name = $genre;
        $new_song->save();
      }
    }
}
