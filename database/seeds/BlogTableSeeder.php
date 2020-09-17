<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
        	'title' => 'Penyerangan seorang bayi',
        	'content' => 'diduga penyerangan yang terjadi di desa bogor berjalan tragis',
        	'category' => 'kekerasan'
        ]);
    }
}
