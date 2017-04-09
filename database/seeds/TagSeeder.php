<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // sample article
        App\Article::create([
            'title'   => 'Multi Gateway Payment dengan Omnipay',
            'content' => $faker->text]);

        App\Article::create([
            'title'   => 'Brunch, Alternatif Gulp dan Grunt',
            'content' => $faker->text]);

        App\Article::create([
            'title'   => '5 Kesalahan Fatal dalam Memulai Startup',
            'content' => $faker->text]);

        // sample video
        App\Video::create([
            'title'    => 'Method setUp dalam PHPUnit',
            'length'   => '00:08:25',
            'filename' => '57a8d3f2.mp4']);

        App\Video::create([
            'title'    => 'Interview dengan founder Wunderlist',
            'length'   => '00:14:05',
            'filename' => '22dc1f05.mp4']);

        // sample tag
        App\Tag::create(['name' => 'Design']);
        App\Tag::create(['name' => 'Startup']);
        App\Tag::create(['name' => 'Backend']);
        App\Tag::create(['name' => 'Testing']);
        App\Tag::create(['name' => 'HTML']);

        // relate tag
        App\Article::find(1)->tags()->attach([3]);
        App\Article::find(2)->tags()->attach([1, 5]);
        App\Article::find(3)->tags()->attach([2]);

        App\Video::find(1)->tags()->attach([3, 4]);
        App\Video::find(2)->tags()->attach([2]);

    }
}
