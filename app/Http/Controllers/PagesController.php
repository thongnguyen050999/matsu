<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->paginate(6);
        return view('pages.index')->with('posts',$posts);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function types()
    {
        $types=Category::orderBy('name','asc')->get();
        return view('pages.types')->with('types',$types);
    }
}
