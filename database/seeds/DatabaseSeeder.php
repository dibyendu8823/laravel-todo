<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Tasks;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        \App\User::truncate();
        \App\Category::truncate();
        \App\Tasks::truncate();


        factory(App\User::class,5)->create();
        factory(App\Category::class,5)->create();
        factory(App\Tasks::class,5)->create();
    }
}
