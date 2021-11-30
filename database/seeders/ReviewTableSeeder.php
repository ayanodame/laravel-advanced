<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'author_id'=>1,
            'book_id'=>1,
            'reviews'=>'面白かった',
        ];
        DB::table('reviews')->insert($param);
    }
}
