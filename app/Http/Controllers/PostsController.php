<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//Using the Database Library
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$posts=Post::all();
       // $posts=Post::orderBy('title','asc')->get();
        //$posts=Post::orderBy('title','desc')->get();
        //$posts=Post::where('title','First Post')->get();
       // $posts=Post::orderBy('title','desc')->take(1)->get(); //To get a certain number of records, use the take()
        //$posts=DB::SELECT('SELECT * FROM posts order by created_at asc');
        $posts=Post::orderBy('title','desc')->paginate(3); //to segment records into pages
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
        //
        return view('posts.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        $post= new Post;
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->reg_no = auth()->user()->email;
        $post->save();
        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return a post infoo
        $post_show = Post::find($id);
        return view('posts.show')->with('pstshow', $post_show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post_show = Post::find($id);
        return view('posts.edit')->with('post', $post_show);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        $post= Post::find($id);
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->save();
        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post_del= Post::find($id);
        $post_del->delete();
        return redirect('/posts')->with('success', 'Post Deleted');
    }
}
