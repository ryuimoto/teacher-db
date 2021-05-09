<?php

use Illuminate\Database\Seeder;
use App\Thread;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        for ($i=0; $i < 100; $i++) { 

            $run_first_num = mt_rand(0,9);
            $run_last_num = mt_rand(0,9);

            Thread::create([
                'name' => config("word.first_name.$run_first_num").config("word.last_name.$run_last_num") ,
                'details' => str_random(32),
                'num_of_comments' => null,
                'momentum' => null,
            ]);
        }
    }
}
