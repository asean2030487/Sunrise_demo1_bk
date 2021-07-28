<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class books_list extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['book_name' => '富爸爸，窮爸爸',
                'book_price' => '300'
            ],
            ['book_name' => '被討厭的勇氣',
                'book_price' => '237'],
            [
                'book_name' => '原子習慣',
                'book_price' => '488'
            ]
        ];
        foreach ($data as $key=>$d) {
            DB::table('books_list')->insert([
                'book_name' => $d['book_name'],
                'book_price' => $d['book_price'],
            ]);
        }

    }
}
