<?php

namespace App\Http\ArticlesControllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Articles'] = Articles::orderBy('id','desc')->paginate(10);
        return view('Articles.Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Articles.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        $Articles = new Articles;

        $Articles->id = $request->id;
        $Articles->title = $request->title;
        $Articles->content = $request->content;
        $Articles->image = $request->image;
        $Articles->user_id = $request->user_id;
        $Articles->category_id = $request->category_id;

        $Articles->save();
        return redirect()->route('Articles.index')
        ->with('success','Articles Baru Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $Articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $Articles)
    {
        return view('Articles.show',compact('Articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $Articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $Articles)
    {
        return view('Articles.edit',compact('Articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $Articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        $Articles->title = $request->title;
        $Articles->content = $request->content;
        $Articles->image = $request->image;
        $Articles->user_id = $request->user_id;
        $Articles->category_id = $request->category_id;


        $Articles->save();
        return redirect()->route('Articles.index')
        ->with('success','Articles Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $Articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $Articles)
    {
        $Articles->delete();
        return redirect()->route('Articles.index')
        ->with('success','Articles Telah Dihapus');
    }
}