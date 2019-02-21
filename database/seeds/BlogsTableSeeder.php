<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();
        $blog->id = 1;
        $blog->name = 'Blog1';
        $blog->content = 'Test1';
        $blog->author = 'Test1';
        $blog->description = "aloalo";
        $blog->save();
        $blog = new Blog();
        $blog->id = 2;
        $blog->name = 'Blog2';
        $blog->content = 'Test2';
        $blog->author = 'Test2';
        $blog->description = "aloalo";

        $blog->save();
        $blog = new Blog();
        $blog->id = 3;
        $blog->name = 'Blog3';
        $blog->content = 'Test3';
        $blog->author = 'Test3';
        $blog->description = "aloalo";

        $blog->save();



    }
}
