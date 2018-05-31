<?php

use Illuminate\Database\Seeder;
use App\Models\Tbl_post;

class Tbl_postsTableSeeder extends Seeder
{
    public function run()
    {
        $tbl_posts = factory(Tbl_post::class)->times(50)->make()->each(function ($tbl_post, $index) {
            if ($index == 0) {
                // $tbl_post->field = 'value';
            }
        });

        Tbl_post::insert($tbl_posts->toArray());
    }

}

