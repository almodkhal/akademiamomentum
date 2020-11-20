<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Post;
use App\Models\Staf;
use Illuminate\Support\Facades\Storage;


class CoursesController extends Controller
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
        $courses = Course::orderby('created_at', 'desc')->paginate(3);
        return view('courses.index')->with('courses', $courses)->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create')->with('posts', Post::all())->with('staff', Staf::all());
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
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'length' => 'required',
            'time' => 'required',
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
        // Create Course
        $course = new Course;
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->short_description = $request->input('short_description');
        $course->length = $request->input('length');
        $course->time = $request->input('time');
        $course->user_id = auth()->user()->id;
        $course->post_id = $request->post;
        $course->image =$filenameStore;
        $course->save();

        return redirect('/courses')->with('success', 'Course Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $courses = Course::find($id);
        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $course = Course::find($id);
        // check for correct user id
        if(auth()->user()->id !== $course->user_id){
            return redirect ('/courses')->with('error', 'Unauthorized Page');
        }
        return view('courses.edit')->with('course', $course)->with('posts', Post::all());
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
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'length' => 'required',
            'time' => 'required',
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
        // Create course
        $course = Course::find($id);
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->short_description = $request->input('short_description');
        $course->length = $request->input('length');
        $course->time = $request->input('time');
        $course->post_id = $request->post;
        if ($request->hasFile('image')){
            Storage::delete('public/images/'.$course->image);
            $course->image = $filenameStore;
        }
        $course->save();
        return redirect('/courses')->with('success', 'Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if(auth()->user()->id !== $course->user_id){
            return redirect ('/courses')->with('error', 'Unauthorized Page');
        }
        // Delete Image
        Storage::delete('public/images/'.$course->image);
        $course->delete();
        return redirect('/courses')->with('success', 'Course Deleted');
    }
}
