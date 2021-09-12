<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tag;
use App\bookmark;
use Illuminate\Support\Facades\Auth;

class bookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = tag::all();
        //dd($tags);
        return view('createBookmark',['tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $public = false;
        if(request('public') == 'public'){
            $public = true;
        }
        if(request('newtag') != 'newtag'){
            $bookmark = bookmark::create([
                'url' => request('url'),
                'comment' => request('comment'),
                'tag_id' => request('tag'),
                'user_id' => Auth::id(),
                'public' => $public
            ]);
        }else{
            $newtag = tag::create([
                'name' => request('tagname'),
                'info' => request('taginfo')
            ]);
            $bookmark = bookmark::create([
                'url' => request('url'),
                'comment' => request('comment'),
                'tag_id' => $newtag->id,
                'user_id' => Auth::id(),
                'public' => $public
            ]);
        }
        return redirect('/bookmark/view/'.$bookmark->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(bookmark $bookmark)
    {
        //

        return view('showBookmark',['bookmark'=>$bookmark]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(bookmark $bookmark)
    {
        //
        $tags = tag::all();
        return view('editBookmark',['bookmark'=>$bookmark,'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(bookmark $bookmark)
    {
        //
        $public = false;
        if(request('public') == 'public'){
            $public = true;
        }
        if(request('newtag') != 'newtag'){
            $bookmark->url = request('url');
            $bookmark->comment = request('comment');
            $bookmark->tag_id = request('tag');
            $bookmark->public = $public;
            $bookmark->save();
        }else{
            $newtag = tag::create([
                'name' => request('tagname'),
                'info' => request('taginfo')
            ]);
            $bookmark->url = request('url');
            $bookmark->comment = request('comment');
            $bookmark->tag_id = $newtag->id;
            $bookmark->public = $public;
            $bookmark->save();
        }
        return redirect('/bookmark/view/'.$bookmark->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(bookmark $bookmark)
    {
        //
        $bookmark->delete();
        return redirect('/home');
    }
}
