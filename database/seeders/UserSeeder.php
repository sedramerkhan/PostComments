<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                    'name' => 'Lana',
                    'email'=>'llll@gmail.com',
                    'password'=>'llll',
                ],
                [
                    'name' => 'Dana',
                    'email'=> 'dddd@gmail.com',
                    'password'=>'ddd',                ],
                [
                    'name' => 'Sedra',
                    'email'=> 'sssss@gmail.com',
                    'password'=>'sss',
                ],
            ]
        );

        $data->each(function ($d) {
            User::create($d);
        });
    }
}
