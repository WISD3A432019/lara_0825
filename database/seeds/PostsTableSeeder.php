<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (range(1,20) as $number) 
        {
        	App\Post::create([
        		'title' => 'title'.$number,
        		'content' =>'content'.$number,
        	]);
        }
    }
}
