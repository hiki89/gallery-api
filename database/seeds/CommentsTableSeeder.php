<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::all()->each(function (Gallery $gallery) {
            $gallery->comments()->saveMany(factory(App\Comment::class, 3)->make());
        });
    }
}
