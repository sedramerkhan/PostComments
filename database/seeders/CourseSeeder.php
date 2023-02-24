<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
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
                    'name'=>'math'
                ],
                [
                    'name'=>'algebra'
                ],
                [
                    'name'=> 'science'
                ],
                [
                    'name'=> 'english'
                ],
            ]
        );

        $data->each(function ($d) {
            Course::create($d);
        });
    }
}
