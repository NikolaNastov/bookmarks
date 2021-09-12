<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\bookmark;
use App\tag;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bookmarks = bookmark::all()->where('user_id',Auth::id());
        //dd($bookmarks);
        return view('home',['bookmarks'=>$bookmarks]);
    }
    public function welcome()
    {
        $tags = DB::select('select count(b.id) as count, t.id, t.name, t.info, t.created_at, t.updated_at from tags t
        inner join bookmarks b on b.tag_id = t.id where b.public = 1
        group by t.id, t.name, t.info, t.created_at, t.updated_at');
        return view('welcome',['tags'=>$tags]);
    }
    public function tag($id)
    {
        $bookmarks = bookmark::all()->where('tag_id',$id)->where('user_id',Auth::id());
        return view('tagView',['bookmarks'=>$bookmarks]);
    }
}
