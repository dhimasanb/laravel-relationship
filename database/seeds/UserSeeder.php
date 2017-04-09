<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(['name'=>'Dini', 'email'=>'dini@gmail.com', 'password'=>Hash::make('r4hasia')]);
        App\User::create(['name'=>'Dani', 'email'=>'dani@gmail.com', 'password'=>Hash::make('passW0rd')]);
        App\User::create(['name'=>'Deon', 'email'=>'deon@gmail.com', 'password'=>Hash::make('secret')]);

        App\Preference::create(['user_id'=>1, 'country'=>'ID', 'currency'=>'IDR', 'subscribe_mailing_list'=>1]);
        App\Preference::create(['user_id'=>2, 'country'=>'MY', 'currency'=>'MYR', 'subscribe_mailing_list'=>0]);
        App\Preference::create(['user_id'=>3, 'country'=>'SG', 'currency'=>'SGD', 'subscribe_mailing_list'=>1]);

    }
}
