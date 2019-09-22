<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index () {
        return view("post.Posts", ["posts" => Post::all()]);
    }
    /*pogledaj Usera  */
    public function create(){
        return view("post.createPost");
    }
    public function store(Request $request){
        $postData = $request->only(["id", "title", "content","likes"]);
        $postData = Post::where("id")->first();
        if (count((array)$postData)){
            $post = new Post();

            $post->title =$postData ['title'];
            $post->content = $postData['content'];
            $post->likes = 0;
            $post->save();
            
            return redirect('/posts');
            }
        return view("post.createPost")->with('complete', 'Enrollment succeeded');
    }
        public function edit($id) {
            $post = Post::findOrFail($id);
            return view('post.editPost', compact('post'));
        }

        public function update($posts, Request $request){
        $sentData = $request->only(["title","content","likes"]);
        $user = User::where('id', $id)->first();
        $user->name = $sentData['title'];
        $user->name = $sentData['lastname'];
        $user->name = $sentData['email'];
        $user->name = $sentData['password'];
        $user->save();
        return redirect('/users');
       
        }
}

/* public function update($id) {
        
    $post = Post::findOrFail($id);
    $post->title = request('title');
    $post->content = request('content');
    $post->save();
    
    return redirect('/posts');
} */

