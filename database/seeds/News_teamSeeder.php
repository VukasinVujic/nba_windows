<?php

use Illuminate\Database\Seeder;

class News_teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::all()->each(function (App\User $u){
            $u->news()->saveMany(factory(App\News_team::class, 7)->make());
        });
    }
}
