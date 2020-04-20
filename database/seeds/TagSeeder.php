<?php

use App\Tag;
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
        $data = [
            ['slug' => 'thinking'], // 1
            ['slug' => 'pain-body'], // 2
            ['slug' => 'present'], // 3
            ['slug' => 'awareness'], // 4
            ['slug' => 'surrender'], // 5
            ['slug' => 'ego'], // 6
            ['slug' => 'resistance'], // 7
            ['slug' => 'relationships'], // 8
        ];

        Tag::insert($data);
    }
}
