<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        App\Post::truncate();
        $total=20;
        foreach (range(1,20) as $number) 
        {
			
        	App\Post::create([
        		'title' => 'title'.$number,
        		'content' =>'content'.$number,
				'is_feature'=>rand(0,1),
				'created_at'=>Carbon::now()->subDays($total-$number),
				'updated_at'=>Carbon::now()->subDays($total-$number),

        	]);
        }
    }
}
