<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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
                    'user_id' => 1, 'title' => 'My Post', 'body' => 'I\'m gonna graduate a few months later',
                ],
                [
                    'user_id' => 3, 'title' => 'Graduation Project',
                    'body' => 'My Graduation Project is about helper system for improving English',
                ],
                [
                    'user_id' => 3, 'title' => 'Fourth Year\'s project',
                    'body' => 'My fourth year project is teaching children programming using a board'
                        . 'and cards which represents code blocks with android app which is used to take photo for' .
                        'the board and the output of the created program will be shown on the screen',
                ],
            ]
        );

        $data->each(function ($d) {
            Post::create($d);
        });
    }
}
