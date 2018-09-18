<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::all()->each(function (Gallery $gallery) {
            $gallery->images()->saveMany(factory(App\Image::class, 15)->make());
        });
    }
}