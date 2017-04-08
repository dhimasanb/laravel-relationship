<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('UserSeeder');
        $this->call('MovieSeeder');
        $this->call('StudentSeeder');
        $this->call('SongSeeder');
    }
}
