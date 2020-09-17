<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BlogDummyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(\App\Blog::class,20)->create();
    }
}
