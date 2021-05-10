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

            Comment::create([
                'thread_id' => $run_thread->id,
                'comment' => config("word.details.$run_comment"),
            ]);
        }
    }
}
