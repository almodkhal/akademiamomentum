<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staf::orderby('created_at', 'desc')->paginate(3);
        return view('staff.index')->with('staff', $staff)->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create')->with('posts', Post::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'bio' => 'required',
            'image' => 'image|max:1990'
        ]);
        // File Upload
        if ($request->hasFile('image')){
            // Get Filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Store Filename | Not overwrite image with same name
            $filenameStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $filenameStore);
        }
        // Create Post
        $staf = new Staf;
        $staf->name = $request->input('name');
        $staf->bio = $request->input('bio');
        $staf->user_id = auth()->user()->id;
        $staf->post_id = $request->post;
        $staf->image =$filenameStore;
        $staf->save();

        return redirect('/staff')->with('success', 'Professor Created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $posts = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staf = Staf::find($id);
        $post = Post::all();
        // check for correct user id
        if(auth()->user()->id !== $staf->user_id){
            return redirect ('/staff')->with('error', 'Unauthorized Page');
        }
        return view('staff.edit')->with('staf', $staf)->with('post', $post);
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
        $this->validate($request, [
            'name' => 'required',
            'bio' => 'required',
            'image' => 'image|max:1990'
        ]);
        // File Upload
        if ($request->hasFile('image')){
            // Get Filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Store Filename | Not overwrite image with same name
            $filenameStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $filenameStore);
        }
        // Create Post
        $staf = new Staf;
        $staf->name = $request->input('name');
        $staf->bio = $request->input('bio');


        if ($request->hasFile('image')){
            Storage::delete('public/images/'.$staf->image);
            $staf->image = $filenameStore;
        }
        $staf->save();
        return redirect('/staff')->with('success', 'Professor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staf = Staf::find($id);
        if(auth()->user()->id !== $staf->user_id){
            return redirect ('/staff')->with('error', 'Unauthorized Page');
        }
        // Delete Image
        Storage::delete('public/images/'.$staf->image);
        $staf->delete();
        return redirect('/staff')->with('success', 'Professor Deleted');
    }


}
