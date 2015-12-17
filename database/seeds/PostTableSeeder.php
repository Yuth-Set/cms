<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder {
    public function run() {
        $posts = [
            ['Test post', 'test_post', 'This is the first testing posts', 1, '1', '1'],
            ['Test post', 'test_post', 'This is the first testing posts', 0, '2', '3'],
            ['Test post', 'test_post', 'This is the first testing posts', 1, '3', '2'],
            ['Test post', 'test_post', 'This is the first testing posts', 0, '1', '1'],
            ['Test post', 'test_post', 'This is the first testing posts', 1, '2', '3'],
            ['Test post', 'test_post', 'This is the first testing posts', 1, '3', '2']

        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert([
                'title'        => $post[0],
                'slug'         => $post[1],
                'content'      => $post[2],
                'status'       => $post[3],
                'user_id'      => $post[4],
                'page_id'      => $post[5],
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
                'deleted_at'   => Carbon::now(),
                'published_at' => Carbon::now()
            ]);
        }
    }
}
