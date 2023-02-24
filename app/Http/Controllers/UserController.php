<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        $data = User::with('courses')->get();
//        dd($data);
        return view('user/index_user', ['users' => $data]);

    }

    public function edit($id){

        $user = User::with('courses')->find($id);
        return view('user/edit_user', ['user' => $user,'courses'=>Course::all()]);

    }

    public function update($id, Request $data){
        $user=User::with('courses')->find($id);
//        dd($data->courses);
        $user->courses()->detach($user->courses);
        $user->update($data->all());
        $user->courses()->attach($data->courses);
        return redirect()->route('users.index');

    }
}
