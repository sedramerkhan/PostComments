<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequst;
use App\Http\Requests\UpdatePostRequst;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::with('comments')->get();
//        $posts = Post::withTrashed()->get(); // get them with deleted
//        dd($posts);
//      return $posts;
        return view('posts.index', compact('posts'));

    }

    public function show($id)
    {
        $post = Post::with('comments')->with('user')->find($id);

        foreach ($post->comments as $key => $value) {
//            echo Comment::where('parent_id',$value->id);
//            echo $value->id;
            $post->comments[$key]['children'] = $this->getChildren($value->id);
        }
//        return $post;
        return view('posts.show', compact('post'));

    }

    public function getChildren($id)
    {
        $comments = Comment::where('parent_id', $id)->with('user')->get();
        foreach ($comments as $key => $value) {
            $comments[$key]['children'] = $this->getChildren($value->id);
        }
        return $comments;
    }

//    private $counter =1;
//    public function space()
//    {
//        $this->counter+=3;
//        return ' '*$this->counter;
//    }
//    public function showComment($comment){
//
//    }

    public function create()
    {
        return view('posts.create_post', ['users' => User::all()]);
    }

    public function store(StorePostRequst $request)
    {

        //1. validation section.
        //2. Business section.
        //3. Response Logic>

        //title -> required, string,max=25

//        $validator = Validator::make($request->all(), [
//                'title' => 'required|string|max:25',//sedra -> success
//                'body' => 'required|string|min:10',//sedra -> failure
//            ])->validate(); //return error to blade
//
//        if($validator->fails()){
//            return $validator->getMessageBag(); //key -> what happened with that key
//        }
//
//        $validator->validated(); //Get the attributes and values that were validated.

        Post::create($request->validated());
        return redirect()->route('posts.index');
    }

    public function update(UpdatePostRequst $request,$id)
    {
        Post::find($id)->update($request->validated());
        return redirect()->route('posts.index');

    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');

    }

    public function edit($id)
    {
        return view('posts.update_post', ['post' => Post::find($id)]);
    }
}

