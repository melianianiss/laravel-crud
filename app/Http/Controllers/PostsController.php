<?php

namespace App\Http\Controllers;
use \App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function Index() {
        $posts =Post::all();
        return view('Posts.Index', compact('posts'));
    }
    public function Show(Post $post){
        $posts=$post;
        return view('Posts.Show',compact('posts'));
    }
    public function Create(){
        return view('Posts.Create');
    }
    public function Store(Request $request){
        $formFeild=$request->validate([
            'title'=>'required|min:5',
            'Posted_By'=>'required|min:5'
        ]);
        Post::create($formFeild);
       return to_route('post.index');
    }
    public function Edit(Post $post){
        return view('Posts.Edit',compact('post'));
    }
    public function update($postId){
    $title = request()->input('title');
    $postedBy = request()->input('Posted_By'); 
    $singlePostFromDB = Post::findOrFail($postId);
    $singlePostFromDB->update([
        'title' => $title,
        'Posted_By' => $postedBy, 
    ]);
    return redirect()->route('post.show', $postId); 
}


    public function Destroy($postId){
        $singlePostFromDB = Post::findOrFail($postId);
        $singlePostFromDB->delete();
        return to_route('post.index');
    }

}
