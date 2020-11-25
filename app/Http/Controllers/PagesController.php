<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Staf;
use App\Models\Course;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Rrasi Indexin e Templates qe do perdoresh ';
        return view('pages.index')
        ->with('title', $title)
        ->with('posts', Post::all())
        ->with('staff', Staf::all())
        ->with('courses', Course::all());
    }
    public function about()
    {
        $title = "Rreth Nesh";
        return view('pages.about')
        ->with('title', $title)
        ->with('posts', Post::all())
        ->with('staff', Staf::all())
        ->with('courses', Course::all());
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
    public function department(Post $post)
    {
        return view('pages.department')
        ->with('post', $post)->with('staff', $post->staff())
        ->with('posts', Post::all())
        ->with('staff', Staf::all())
        ->with('courses', Course::all());
    }
}
