<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\profile;
use App\user;
use Auth;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function approveteacher($id){

        DB::table('users')->where('id','=',$id)->update(['admin'=>2]);
        return back()->with('response', 'Account Approved!');
    }

    public function removeteacher($id){

        DB::table('users')->where('id','=',$id)->update(['admin'=>0]);
        return back()->with('response', 'Account Removed as Teacher!');
    }

    public function removepost($id){
        // echo $id;
        DB::table('posts')->where('post_title','=',$id)->update(['status'=>0]);
        return back()->with('response', 'Post Removed!');
    }
    public function approvepost($id){
        // echo $id;
        DB::table('posts')->where('post_title','=',$id)->update(['status'=>1]);
        return back()->with('response', 'Post Approved!');
    }

    public function removeassignteacher($userid, $categoryid){
        

        $removeassignteacher=DB::table('teacherassign')
                            ->where('teacher_id','=',$userid)
                            ->where('catagory_id','=',$categoryid)

        ->delete();
        return back();
    }

    public function assignteacher(Request $req){
        $teacher=$req->teacher;
        $catagory=$req->catagory;

        $at=DB::table('teacherassign')->insert(['teacher_id'=>$teacher,'catagory_id'=>$catagory]);
        return back();
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $profile = DB::table('users')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
         -> select('users.*', 'profiles.*')
         ->where(['profiles.user_id' => $user_id])
         -> first();
        // $posts = Post::all();
         $posts=DB::table('posts')->join('users','posts.user_id','=','users.id')->join('categories','posts.category_id','=','categories.id')->where('posts.status','=',1)->orderBy('posts.id','DESC')->get();

        // return $posts;
        // exit();
        // return $profile;
        // exit();
        return view('home', ['profile' => $profile, 'posts' => $posts]);
    }
}
