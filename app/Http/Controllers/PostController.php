<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Category;
use App\Post;
use Auth;
use Illuminate\support\Facades\DB;

class PostController extends Controller
{
    public function post(){
    	$categories = Category::all();
    	// $posts = Post::all();
    	// return $posts;
    	// exit();
    	
    	return view('posts.post', ['categories' => $categories]);
    }

    public function viewpost($posttitle){

        $post=DB::table('posts')
        ->where('post_title','=', $posttitle)
        ->get();

        // echo $post;
        return view('posts.view',['posts'=> $post]);





    }

    public function addPost(Request $request){
    	// return $request->input('post_title');

    	$this-> validate($request, [
    		'post_title' => 'required',
    		'post_body' => 'required',
    		'category_id' => 'required',
    		  

    	]);
        $usr=Auth::user()->id;
        $ct=DB::table('teacherassign')
        ->where('catagory_id','=', $request->input('category_id'))
        ->where('teacher_id','=',$usr)
        ->count();

        if($ct>0){
            $posts = new Post;
        $posts->post_title = $request->input('post_title');
        $posts->user_id = Auth::user()->id;
        $posts->post_body = $request->input('post_body');
        $posts->category_id = $request->input('category_id');
        if (Input::hasFile('post_image')) {
            $file = Input::File('post_image');
            $file->move(public_path() . '/posts/', $file->getClientOriginalName());
            $url = URL::to("/") . '/posts/' . $file->getClientOriginalName();
            // return $url;
            // exit();
        }
        else{
             
            
            $url = URL::to(" ");
        }
        $posts->post_image = $url;
        $posts->save();
        return redirect('/home')-> with('response', 'Post Published Successfully');

        }
        else {
            return back()->with('response', 'Not Authorized to Post on this topic!Seek Approval from the Admin.');
        }
    	
    }

    public function view($post_id)
    {
        $post = Post::where('id','=', $post_id)->get();
        $categories = Category::all();
        // return $categories;
        // exit();
        return view('posts.view',['post'=> $post, 'categories' => $categories]);
    }

     public function edit($post_id)
    {
        return $post_id;
    }
}
