<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posters;

class PageController extends Controller
{
    public function main()
    { 
        $model = Posters::all();
        return view('main', ['data' => $model]);
    }

    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function project()
    {
        return view('project');
    }
    public function blog()
    {
        return view('blog');
    }
    public function single()
    {
        return view('single');
    }
    public function contact()
    {
        return view('contact');
    }

}
