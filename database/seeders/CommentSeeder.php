<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Collection::make([
                [
                    'user_id' => 3, 'post_id' => 1, 'body' => 'I like it'
                ],
                [
                    'user_id' => 2, 'post_id' => 1, 'body' => 'it is greet'
                ],
                [
                    'user_id' => 1, 'post_id' => 2, 'body' => 'it is wonderful.'
                ],
                [
                    'user_id' => 2, 'post_id' => 3, 'body' => 'it was really a wonderful project.'
                ],
                [
                    'user_id' => 1, 'post_id' => 3, 'parent_id' => 4, 'body' => 'you are right.'
                ],
                [
                    'user_id' => 1, 'post_id' => 3, 'body' => 'what was your mark?'
                ],
                [
                    'user_id' => 3, 'post_id' => 3, 'parent_id' => 6, 'body' => 'we took 88.'
                ],
                [
                    'user_id' => 1, 'post_id' => 3, 'parent_id' => 7, 'body' => 'oh that is nice,good luck.'
                ],
                [
                    'user_id' => 2, 'post_id' => 3, 'parent_id' => 7, 'body' => 'You deserve it.'
                ],
                [
                    'user_id' => 3, 'post_id' => 3, 'parent_id' => 9, 'body' => 'oh thanks.'
                ],
            ]
        );

        $data->each(function ($d) {
            Comment::create($d);
        });

    }
}
