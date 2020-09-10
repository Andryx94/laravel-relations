<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_genre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('song_id');
            $table->foreign('song_id')
            ->references('id')
            ->on('songs');

            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')
            ->references('id')
            ->on('genres');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_genre');
    }
}
