<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Status
        App\Status::create(['user_id'=>1, 'content'=>'Hari ini #belajar Laravel 5!']);
        App\Status::create(['user_id'=>2, 'content'=>'Cari framework PHP? Laravel aja..']);

        // Create Photo
        App\Photo::create(['title'=>'Buku Pranikah Recomended', 'filename'=>'BVOMDFeE2.jpg', 'user_id'=>1]);
        App\Photo::create(['title'=>'Memulai Hidup Baru', 'filename'=>'VN74aUmLD.jpg', 'user_id'=>2]);
        App\Photo::create(['title'=>'Rumah Impian', 'filename'=>'HVpdKBe.jpg', 'user_id'=>2]);

        // Create Comment
        App\Status::find(1)->comments()->saveMany([
            App\Comment::create(['content'=>'Jadikan aku muridmu guru.. :o', 'user_id'=>3, 'commentable_id'=>1, 'commentable_type'=>'App\\Status']),
            App\Comment::create(['content'=>'Ini juga baru belajar mas.. ', 'user_id'=>1, 'commentable_id'=>1, 'commentable_type'=>'App\\Status']),
            App\Comment::create(['content'=>'Ahh.. merendah untuk meninggi nih..', 'user_id'=>3, 'commentable_id'=>1, 'commentable_type'=>'App\\Status'])
        ]);

        App\Status::find(2)->comments()->saveMany([
            App\Comment::create(['content'=>'1 like this banget dah..', 'user_id'=>3, 'commentable_id'=>1, 'commentable_type'=>'App\\Status']),
            App\Comment::create(['content'=>'Kalau cari jodoh? Hahaha.. :v', 'user_id'=>1, 'commentable_id'=>1, 'commentable_type'=>'App\\Status'])
        ]);

        App\Photo::find(1)->comments()->saveMany([
            App\Comment::create(['content'=>'Catet ah..', 'user_id'=>2, 'commentable_id'=>2, 'commentable_type'=>'App\\Photo']),
            App\Comment::create(['content'=>'Belinya dimana nih?', 'user_id'=>3, 'commentable_id'=>2, 'commentable_type'=>'App\\Photo']),
            App\Comment::create(['content'=>'Di Gramedia ada koq.', 'user_id'=>1, 'commentable_id'=>2, 'commentable_type'=>'App\\Photo'])
        ]);

        App\Photo::find(2)->comments()->saveMany([
            App\Comment::create(['content'=>'Akhirnya nikah juga. Selamat ya! :D', 'user_id'=>1, 'commentable_id'=>3, 'commentable_type'=>'App\\Photo']),
            App\Comment::create(['content'=>'Sekarang tinggal dimana?', 'user_id'=>3, 'commentable_id'=>3, 'commentable_type'=>'App\\Photo']),
            App\Comment::create(['content'=>'Di Bandung.. :)', 'user_id'=>2, 'commentable_id'=>3, 'commentable_type'=>'App\\Photo']),
        ]);

    }
}
