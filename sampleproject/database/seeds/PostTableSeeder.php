<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Subject;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $subject = Subject::where('name','測試主題')->first();
      for ($index=0; $index < 10000; $index++) {
        $post = new Post;
        $post->content = 'Laravel 6.0 demo';
        $post->subject_id = $subject->id;
        $post->save();
      }
    }
}
