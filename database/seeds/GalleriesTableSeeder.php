<?php

use Illuminate\Database\Seeder;
use App\User;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user) {
            $user->galleries()->saveMany(factory(App\Gallery::class, 5)->make());
        });
    }
}