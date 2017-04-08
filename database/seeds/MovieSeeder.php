<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Studio::create(['name'=>'Pixar', 'founded_at'=>'1986-02-03']);
        App\Studio::create(['name'=>'DreamWorks Animation', 'founded_at'=>'2004-10-27']);

        App\Movie::create(['name'=>'Cars 2', 'date_released'=>'2011-06-24', 'studio_id'=>1]);
        App\Movie::create(['name'=>'Finding Nemo', 'date_released'=>'2003-05-30', 'studio_id'=>1]);
        App\Movie::create(['name'=>'Kung Fu Panda 2', 'date_released'=>'2011-05-26', 'studio_id'=>2]);

    }
}
