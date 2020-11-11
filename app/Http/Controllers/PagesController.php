<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Rrasi Indexin e Templates qe do perdoresh ';
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        return view('about.about');
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
