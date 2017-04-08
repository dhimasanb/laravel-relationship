<?php

use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artist
        $coldplay = App\Artist::create(['name'=>'Coldplay', 'genre'=>'Alternative Rock']);
        $avicii = App\Artist::create(['name'=>'Avicii', 'genre'=>'Electro House']);

        // Album
        $parachutes = App\Album::create(['artist_id'=>1, 'title'=>'Parachutes', 'released'=>'2000-07-10']);
        $ghostStories = App\Album::create(['artist_id'=>1, 'title'=>'Ghost Stories', 'released'=>'2014-04-16']);
        $true = App\Album::create(['artist_id'=>2, 'title'=>'True', 'released'=>'2013-09-13']);

        // Song
        $yellow = App\Song::create(['album_id'=>1, 'title'=>'Yellow', 'length'=>'00:04:29']);
        $dontPanic = App\Song::create(['album_id'=>1, 'title'=>'Don\'t Panic', 'length'=>'00:02:17']);
        $magic = App\Song::create(['album_id'=>2, 'title'=>'Magic', 'length'=>'00:04:45']);
        $sky = App\Song::create(['album_id'=>2, 'title'=>'A Sky Full of Stars', 'length'=>'00:04:28']);
        $wake = App\Song::create(['album_id'=>3, 'title'=>'Wake Me Up', 'length'=>'00:04:09']);

        // Attach Relation
        $coldplay->albums()->saveMany([$parachutes, $ghostStories]);
        $avicii->albums()->save($true);
        $parachutes->songs()->saveMany([$yellow, $dontPanic]);
        $ghostStories->songs()->saveMany([$magic, $sky]);
        $true->songs()->save($wake);

    }
}
