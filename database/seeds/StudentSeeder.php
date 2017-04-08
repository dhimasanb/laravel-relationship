<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $joni = App\Student::create(['name'=>'Joni', 'date_of_birth'=>'1990-08-14', 'gender'=>'m']);
        $dadang = App\Student::create(['name'=>'Dadang', 'date_of_birth'=>'1987-12-04', 'gender'=>'m']);
        $yuni = App\Student::create(['name'=>'Yuni', 'date_of_birth'=>'1992-11-14', 'gender'=>'f']);

        $menulis = App\Course::create(['title'=>'Kemampuan Menulis Dasar', 'units'=>3, 'room'=>'B13']);
        $menggambar = App\Course::create(['title'=>'Mengggambar Manga Level 1', 'units'=>2, 'room'=>'A10']);
        $mewarnai = App\Course::create(['title'=>'Mewarnai Manga Level 1', 'units'=>2, 'room'=>'A01']);

        $joni->courses()->attach([$menulis->id, $menggambar->id, $mewarnai->id]);
        $dadang->courses()->attach([$menulis->id, $menggambar->id]);
        $yuni->courses()->attach([$mewarnai->id]);

    }
}
