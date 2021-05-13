<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Thread;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            $run_thread = Thread::inRandomOrder()->first();
            $run_comment = mt_rand(0,9);

            $cur_comment_num = Comment::where('thread_id',$run_thread->id)->count();

            if($cur_comment_num == 0 ){
                $cur_comment_num++;
            }
    
            Comment::create([
                'thread_id' => $run_thread->id,
                'comment_num' => $cur_comment_num++,
                'comment_view_id' => str_random(8),
                'comment' => config("word.details.$run_comment"),
            ]);
        }
    }
}
