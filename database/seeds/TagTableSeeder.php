<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder {
    public function run() {
        DB::table('tags')->insert([
            'name'         => 'movie',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
            'deleted_at'   => Carbon::now(),
            'published_at' => Carbon::now()
        ]);
        DB::table('tags')->insert([
            'name'         => 'song',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
            'deleted_at'   => Carbon::now(),
            'published_at' => Carbon::now()
        ]);
        DB::table('tags')->insert([
            'name'         => 'tutorial',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
            'deleted_at'   => Carbon::now(),
            'published_at' => Carbon::now()
        ]);
        DB::table('tags')->insert([
            'name'         => 'technology',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
            'deleted_at'   => Carbon::now(),
            'published_at' => Carbon::now()
        ]);
        DB::table('tags')->insert([
            'name'         => 'video',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
            'deleted_at'   => Carbon::now(),
            'published_at' => Carbon::now()
        ]);
        DB::table('tags')->insert([
            'name'         => 'other',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
            'deleted_at'   => Carbon::now(),
            'published_at' => Carbon::now()
        ]);
    }
}
